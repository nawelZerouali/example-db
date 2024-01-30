
<section class="top_dish_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title position-relative">
                    <h1>Our  Dishes</h1>
                    <hr>
                    <div class="round-planet planet">
                        <div class="round-planet planet2">
                            <div class="shape shape1"></div>
                            <div class="shape shape2"></div>
                        </div>
                    </div>
                </div>
                <form action="{{ url('product_search') }}" method="GET">
                    @csrf
                    <div class="box">
                        <input type="checkbox" id="check">
                        <div class="search-box">
                          <input type="text" name="search" placeholder="search here...">
                          <label for="check" class="icon">
                            <i class="fas fa-search"></i>
                          </label>
                        </div>
                      </div>
                 <!--input style="width: 500px;" type="text" name="search" placeholder="Search for (product) ...">
                  <input type="submit" value="search"-->
                </form>
            </div>
        </div>
        <style>
            .row {
                display: flex;
                justify-content: space-around; /* Adjust as needed */
                flex-wrap: wrap;
            }

            .single_dish {
                width: 30%; /* Adjust as needed, this is an example */
                margin: 10px; /* Adjust as needed */
            }

            .thumb img {
                width: 50%; /* Make the images fill the container */
                height: auto; /* Maintaicn aspect ratio */
            }

          /*  input[type="text"] {
                width: 500px;
                padding: 10px; /* Adjust padding as needed
                border-radius: 10px; /* Set border-radius for rounded corners
                border: 1px solid #ced4da; /* Border color
            }*/
            .box{
  max-width: 400px;
  width: 100%;

}
.box .search-box{
  position: relative;
  height: 50px;
  max-width: 50px;
  margin: auto;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
  border-radius: 25px;
  transition: all 0.3s ease;
}
#check:checked ~ .search-box{
  max-width: 380px;
}
.search-box input{
 position: absolute;
 height: 100%;
 width: 100%;
 border-radius: 25px;
 background: #fff;
 outline: none;
 border: none;
 padding-left: 20px;
 font-size: 18px;
}
.search-box .icon{
  position: absolute;
  right: -2px;
  top: 0;
  width: 50px;
  background:#FF676D;
  height: 100%;
  text-align: center;
  line-height: 50px;
  color: #FFF;
  font-size: 20px;
  border-radius: 25px;
}
#check:checked ~ .search-box .icon{
  background: #FF676D;
  color: #FFF;
  width: 60px;
  border-radius: 0 25px 25px 0;
}
#check{
  display: none;
}
        </style>
        <div class="row">
            @foreach ($product as $prod)

            <div class="single_dish col-lg-4 col-md-6 text-center" >
              <a href="{{url('/product_details',$prod->id)}}">
                <div class="thumb">

                    <img class="img-fluid" src="{{ asset($prod->image) }}" alt="{{ $prod->name_prod }}" >

                </div>
                <h4>{{ $prod->name_prod }}</h4>
                <p>
                    {{ $prod->description }}
                </p>
                <h5 class="price">  {{ $prod->price }}.D.A</h5>
            </a>
            </div>

            @endforeach
             {{-- Display Artisan Profiles --}}
             <div class="container">
                <h3>Search Results</h3>

                @if (isset($artisan) && count($artisan) > 0)
                    <div class="row">
                        @foreach ($artisan as $artisa)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    {{-- You may want to replace this with the artisan's profile image --}}

                                    <div class="card-body">
                                        <h4 class="card-title">{{ $artisa->name }}</h4>
                                        {{-- Add other artisan details as needed --}}
                                        <p class="card-text">Description or additional details</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ url('/artisan_profile', $artisa->id) }}" class="btn btn-primary">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination links for artisans -->
                    <div class="pagination justify-content-center mt-4">
                        {{ $artisan->links() }}
                    </div>
                @else
                    <div class="alert alert-info mt-4">
                        <p>No artisans found.</p>
                    </div>
                @endif


                @if (isset($deliveryman) && count($deliveryman) > 0)
                    <div class="row">
                        @foreach ($deliveryman as $delivery)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    {{-- You may want to replace this with the artisan's profile image --}}

                                    <div class="card-body">
                                        <h4 class="card-title">{{ $delivery->name }}</h4>
                                        {{-- Add other artisan details as needed --}}
                                        <p class="card-text">Description or additional details</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ url('/deliveryman_profile', $delivery->id) }}" class="btn btn-primary">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination links for artisans -->
                    <div class="pagination justify-content-center mt-4">
                        {{ $deliveryman->links() }}
                    </div>

                @endif

                <!-- Other content in your container -->
            </div>


        </div>
    </div>
</section>
