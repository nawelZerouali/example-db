{{--<div class="side_menu">
    <a class="logo" href="{{ url('/') }}">
        <img src="artisan/vendors/images/justCLICK.png" alt="" >
    </a>
    <ul class="list menu_right">
        <li>
            @if (Route::has('login'))
                @auth
                  <li>
                    <x-app-layout>
                    </x-app-layout>
                </li>
                @else
                    <li>
                        <a class="btn btn-success" id="logincss" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="btn btn-primary" id="registercss" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif

                @endauth
            @endif
        </li>
        <li>
            <a href="{{ url('/') }}">Home</a>
        </li>
        <li>
            <a href="{{ url('products') }}">Diches</a>
        </li>
        <li>
            <a href="menu.html">Menu</a>
        </li>
        <li>
            <a href="book-table.html">Book a table</a>
        </li>
        <li>
            <a href="#">Pages</a>
            <ul class="list">
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="elements.html">Elements</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Blog</a>
            <ul class="list">
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="single-blog.html">Blog Details</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="contact.html">Contact</a>
        </li>
        <li>
            <a href="{{ url('/show_cart') }}">Cart</a>
        </li>
        <li>
            <a href="{{ url('show_order') }}">Order</a>
        </li>

    </ul>

</div>--}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <header>

    &nbsp;&nbsp;&nbsp;&nbsp; <a class="logo" href="{{ url('/') }}">
        <img src="artisan/vendors/images/apple-touch-icon1.png" alt="" >
    </a>


    <ul class="list menu_right">

        <li>
            <a href="{{ url('/') }}">Home</a>
        </li>
        <li>
            <a href="{{ url('products') }}">Diches</a>
        </li>
        <li>
            <a href="menu.html">Menu</a>
        </li>



        <li>
            <a href="contact.html">Contact</a>
        </li>
        <li>
            <a href="{{ url('/show_cart') }}">Cart</a>
        </li>
        <li>
            <a href="{{ url('show_order') }}">Order</a>
        </li>
       </ul>
        <ul>
        <li>
            @if (Route::has('login'))
                @auth
                  <li>
                    <x-app-layout>
                    </x-app-layout>
                </li>
                @else
                    <li>
                        <a class="btn btn-dark" id="logincss" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="btn btn-warning" id="registercss" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif

                @endauth
            @endif
        </li>
    </ul>
            <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars">
                        <ul class="list menu_right">

                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('products') }}">Diches</a>
                            </li>
                            <li>
                                <a href="menu.html">Menu</a>
                            </li>



                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="{{ url('/show_cart') }}">Cart</a>
                            </li>
                            <li>
                                <a href="{{ url('show_order') }}">Order</a>
                            </li>
                           </ul>
                            <ul>
                            <li>
                                @if (Route::has('login'))
                                    @auth
                                      <li>
                                        <x-app-layout>
                                        </x-app-layout>
                                    </li>
                                    @else
                                        <li>
                                            <a class="btn btn-dark" id="logincss" href="{{ route('login') }}">Login</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li>
                                                <a class="btn btn-warning" id="registercss" href="{{ route('register') }}">Register</a>
                                            </li>
                                        @endif

                                    @endauth
                                @endif
                            </li>
                        </ul>
                    </i>
                </label>
            </div>
    </header>
    <style>
    header{
        width:100;
        height: 80px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        align-content: center;
        position: fixed;
        z-index: 99;
        box-shadow: 0 0 10px #360505;
        background: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
    }
    #chk1{
        display: none;


    }
    i{
        color: #fff;
        cursor: pointer;
    }
    .logo img {
        max-width: 30%; /* or a specific pixel value */
        height:auto;/* La hauteur est automatiquement ajustée pour maintenir les proportions du logo */
        display:block;


      }

    header ul {
        flex:1;
        display: flex;
        justify-content: space-between;
        align-items: center;
        align-content: center;
    }
    header ul li{
        list-style: none;
    }
    header ul li a{
        text-decoration: none;
        color:#0e0b0b;
        font-weight: 600;
        text-transform: uppercase;
        padding: 10px 15px;
    }
    header ul li a:hover{
        color: #fff;
        border-radius: 15px;
    }
   header ul li ul {
     display: none;
     position: absolute;


    }
    ul li:hover ul {
     display: block;
}
    header .menu{
        font-size:1 em;
        display: none;
    }
    @media(max-width:1000px){

        header ul{
            position: fixed;
            top:100px;
            right: -100%;
            background: rgba(0,0,0,0.5);
            height: calc(100vh - 100px);
            width:50%;
            flex-direction: column;
            align-items: center;
            transition: right 0.5s linear;
        }

        header .menu{
            display: block;
            width:100px;
            text-align: center;
        }
        #chk1:checked ~ ul{
            right: 0;

        }

    }
</style>
