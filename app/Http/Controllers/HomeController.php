<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\QuantityCommande;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Rating;
use Stripe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $product = Product::all();
        $comment = Comment::all();
        $reply = Reply::all();

        return view('home.userpage', compact('product', 'comment', 'reply'));
    }
    public function redirect()
    {
        $role = Auth::user()->role;

        if ($role == 'artisan' && Auth::id()) {
            $total_product = Product::all()->count();
            $total_order = Order::all()->count();
            $total_customer = User::where('role', '=', 'customer')->count();

            $orders = Order::all();
            $total_revenue = 0;
            foreach ($orders as $order) {
                $total_revenue += $order->price;
            }
            $total_delivered = Order::where('delivery_status', '=', 'delivered')->get()->count();
            $total_processing = Order::where('delivery_status', '=', 'processing')->get()->count();
            return view('users.artisans.home', compact('total_product', 'total_order', 'total_customer', 'total_revenue', 'total_delivered', 'total_processing', 'orders'));
        }
        if ($role == 'customer') {   //home + dashboard //ghi dashbord
            $product = Product::all();
            $comment = Comment::orderby('id', 'desc')->get();
            $reply = Reply::all();
            return view('home.userpage', compact('product', 'comment', 'reply'));
        }
        if ($role == 'deliveryman') {   //home + dashbord //ghi dashboard
            $product = Product::all();
            $comment = Comment::orderby('id', 'desc')->get();
            $orders = Order::all();
            $user = Auth::user();
            return view('users.deliverymans.home', compact('product', 'comment',
             'orders','user'));
        }
    }

    public function product_details($id)
    {


        $user =  Auth::user();
        // Fetch ratings for the product
        $ratings = Rating::where('prod_id', $id)->get();
        // Calculate statistics
        $totalRatings = count($ratings);
        $averageRating = ($totalRatings > 0) ? $ratings->avg('rating') : 0;

        // Count the number of ratings for each star
        $fiveStarCount = $ratings->where('rating', 5)->count();
        $fourStarCount = $ratings->where('rating', 4)->count();
        $threeStarCount = $ratings->where('rating', 3)->count();
        $twoStarCount = $ratings->where('rating', 2)->count();
        $oneStarCount = $ratings->where('rating', 1)->count();
        $product = Product::find($id);
        $comment = Comment::orderby('id', 'desc')->get();
        $reply = Reply::all();
        return view('home.product_details', compact('product','comment','reply','user',
        'ratings','totalRatings','averageRating','fiveStarCount','fourStarCount',
        'threeStarCount','twoStarCount','oneStarCount' ));
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
           // $userid = $user->id;
            $product = Product::find($id);
            //hna khss tzidou column f table cart , smiwha seller_id
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->email = $user->email;
            // ki tzidouha , decommentiw had la ligne
            $cart->seller_id = $product->user_id;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->name_prod;
            $cart->quantity = $request->quantity;
            $cart->price = $product->price * $request->quantity;
            $cart->image = $product->image;

            $cart->prod_id = $product->id;
            $cart->user_id = $user->id;
            $cart->save();
            return redirect()->back()->with('message', 'Product added to cart');
        } else {
            return redirect('login');
        }
        return view('home.product_details',compact('product'));
    }



    public function show_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('home.show_cart', compact('cart'));
        } else {
            return redirect('login');
        }
    }
    public function remove_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Product deleted successfuly');
    }
    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;
        //hna khss 9bl dirou whd l groupby 'seller_id', normalement hakk :
        //$data = Cart::where('user_id', '=', $userid)->groupBy('seller_id')->get();
        //hna ghi bach t3rfou ch7al kyn m seller f had lcart te3 l user
        $data = Cart::where('user_id', '=', $userid)->get();
        $groupedCarts = $data->groupBy('seller_id');
        ////////////////////////
        foreach ($groupedCarts as $sellerId => $carts) {
            // Create an order for each group
            $order = new Order();
          //  $order->product_title = '';
            $order->name = $carts[0]->name;
            $order->email = $carts[0]->email;
            $order->phone = $carts[0]->phone;
            $order->address = $carts[0]->address;
            $order->user_id = $carts[0]->user_id;
            $order->prod_id = $carts[0]->prod_id;
            $order->seller_id = $carts[0]->seller_id;
            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->image = '';
            $quantity = $price = 0;
            $order->save();

            // Add items to the order from each cart in the group
            foreach ($carts as $cart) {
                // Append product information from each cart to the order
                $order->product_title .= $cart->product_title . ', ';
                $quantity += $cart->quantity;
                $price += $cart->price;

                // Create order products for each cart item and delete the cart item
                $orderProduct = new QuantityCommande();
                $orderProduct->quantity = $cart->quantity;
                $orderProduct->price = $cart->price;
                $orderProduct->prod_id = $cart->prod_id;
                $orderProduct->order_id = $order->id;
                $orderProduct->save();

                // Delete the cart item
                $cart->delete();
            }
            // Remove the trailing comma and space from product_title
            $order->product_title = rtrim($order->product_title, ', ');
            // Set total quantity and total price for the order
            $order->quantity = $quantity;
            $order->price = $price;

            // Save the order
            $order->save();
        }
        ////////////////////





        return redirect()->back()->with('message', 'We Received Your  Order , We Will connect with you soon...');
    }
    public function stripe($totalprice)
    {
        return view('home.stripe', compact('totalprice'));
    }

    public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $totalprice,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);
        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->image = $data->image;

            $order->prod_id = $data->prod_id;
            $order->payment_status = 'Paid';
            $order->delivery_status = 'processing';
            $order->save();
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }

        Session::flash('success', 'Payment successful!');

        return back();
    }


    public function show_order()
    {
        if (Auth::id()) {
            $user = Auth::User();
            $userid = $user->id;
            $order = Order::where('user_id', '=', $userid)->get();

            return view('home.order', compact('order'));
        } else {
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order = Order::find($id);
        $order->delivery_status = 'You Canceled the Order';
        $order->save();
        return  redirect()->back();
    }

    public function add_comment(Request $request)
    {
        if (Auth::id()) {
            $comment = new Comment();
            $comment->name = Auth::user()->name;
            if(isset($request->victime_id)){
                $comment->victime_id = $request->victime_id;
            }
            $comment->user_id = Auth::user()->id;
            $comment->comment = $request->comment;
            $comment->save();
            return  redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function add_reply(Request $request)
    {
        if (Auth::id()) {
            $reply = new Reply();
            $reply->name = Auth::user()->name;
            $reply->user_id = Auth::user()->id;
            $reply->comment_id = $request->commentId;
            $reply->reply = $request->reply;
            $reply->save();
            return  redirect()->back();
        } else {
            return redirect('login');
        }
    }


    public function product_search(Request $request)
    {
        $comment = Comment::whereNull('victime_id')->orderby('id', 'desc')->get();
        $reply = Reply::all();
        $search_text = $request->search;

        $product = Product::where('name_prod', 'LIKE', "%$search_text%")
            ->paginate(10);

        $artisan = User::where('role', '=', 'artisan')->where('name', 'LIKE', "%$search_text%")
            ->paginate(10);

            $deliveryman = User::where('role', '=', 'deliveryman')->where('name', 'LIKE', "%$search_text%")
            ->paginate(10);
        return view('home.userpage', compact('product', 'reply', 'comment', 'artisan','deliveryman'));
    }






    public function products(Request $request)
    {
        $product = Product::all();
        $comment = Comment::all();
        $reply = Reply::all();
        return view('home.all_product', compact('product', 'comment', 'reply'));
    }







    public function search_product(Request $request)
    {
        $comment = Comment::orderby('id', 'desc')->get();
        $reply = Reply::all();
        $serach_text = $request->search;
        $product = Product::where('name_prod', 'LIKE', "%$serach_text%")
            ->paginate(10);
        return view('home.all_product', compact('product', 'reply', 'comment'));
    }






    public function artisan_profile($id)
    {
        $comment = Comment::where('victime_id',$id)->orderby('id', 'desc')->get();
        $reply = Reply::all();
        $artisan = User::find($id);

        if (!$artisan) {
            return redirect()->route('error.page');
        }

        $product = Product::where('user_id', $artisan->id)->paginate(10);

        return view('home.artisan_profile', compact('artisan', 'product' ,'reply', 'comment'));
    }


    public function deliveryman_profile($id)
    {

        $comment = Comment::where('victime_id',$id)->orderby('id', 'desc')->get();

        $reply = Reply::all();
        $deliveryman = User::find($id);

        if (!$deliveryman) {
            return redirect()->route('error.page');
        }
        return view('home.deliveryman_profile', compact('deliveryman', 'reply', 'comment'));
    }

    public function product_details1($productId)
    {
        $product = Product::find($productId);
        $user =  Auth::user();//to get the user and send it with data to product_details page
        // Fetch ratings for the product
        $ratings = Rating::where('prod_id', $productId)->get();
        // Calculate statistics
        $totalRatings = count($ratings);
        $averageRating = ($totalRatings > 0) ? $ratings->avg('rating') : 0;

        // Count the number of ratings for each star
        $fiveStarCount = $ratings->where('rating', 5)->count();
        $fourStarCount = $ratings->where('rating', 4)->count();
        $threeStarCount = $ratings->where('rating', 3)->count();
        $twoStarCount = $ratings->where('rating', 2)->count();
        $oneStarCount = $ratings->where('rating', 1)->count();

        return view('home.product_details1', [
            'product' => $product,
            'averageRating' => $averageRating,
            'totalRatings' => $totalRatings,
            'fiveStarCount' => $fiveStarCount,
            'fourStarCount' => $fourStarCount,
            'threeStarCount' => $threeStarCount,
            'twoStarCount' => $twoStarCount,
            'oneStarCount' => $oneStarCount,
            'reviews' => $ratings,
            'user' => $user //same here
        ]);


    }


}
