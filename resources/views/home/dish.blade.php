<section class="top_dish_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title position-relative">
                    <h1>Our Dishes</h1>
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
                justify-content: space-around;
                /* Adjust as needed */
                flex-wrap: wrap;
            }

            .single_dish {
                width: 30%;
                /* Adjust as needed, this is an example */
                margin: 10px;
                /* Adjust as needed */
            }

            .thumb img {
                width: 50%;
                /* Make the images fill the container */
                height: auto;
                /* Maintaicn aspect ratio */
            }

            /*  input[type="text"] {
                width: 500px;
                padding: 10px; /* Adjust padding as needed
                border-radius: 10px; /* Set border-radius for rounded corners
                border: 1px solid #ced4da; /* Border color
            }*/
            .box {
                max-width: 400px;
                width: 100%;

            }

            .box .search-box {
                position: relative;
                height: 50px;
                max-width: 50px;
                margin: auto;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
                border-radius: 25px;
                transition: all 0.3s ease;
            }

            #check:checked~.search-box {
                max-width: 380px;
            }

            .search-box input {
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

            .search-box .icon {
                position: absolute;
                right: -2px;
                top: 0;
                width: 50px;
                background: #FF676D;
                height: 100%;
                text-align: center;
                line-height: 50px;
                color: #FFF;
                font-size: 20px;
                border-radius: 25px;
            }

            #check:checked~.search-box .icon {
                background: #FF676D;
                color: #FFF;
                width: 60px;
                border-radius: 0 25px 25px 0;
            }

            #check {
                display: none;
            }
            .product-box {
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: box-shadow 0.3s ease, background-color 0.3s ease;
    background-color: #ffffff84;
}

.product-box:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

.product-img {
    width: 100%;
    height: auto;
    display: block;
    opacity: 1;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.product-box:hover .product-img {
    transform: scale(1.05);
    opacity: 0.8;
}

.product-caption {
    padding: 15px;
    text-align: left; /* Align text to the left */
}

h4, p, .price ins {
    color: #333; /* Default text color */
    transition: color 0.3s ease;
}

.product-box:hover h4 {
    color: #dbb455 /* Gold color on hover */
}
h5{
    color: darksalmon
}

.button {
    display: inline-block;
    padding: 10px 15px;
    background-color: #e44d26;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #333;
}


@media (max-width: 768px) {
    .product-caption {
        padding: 10px;
    }
}

        </style>
        <div class="product-wrap">
            <div class="product-list">
                <ul class="row">
                    @foreach ($product as $prod)
                        <li class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-box">
                                <a href="{{ url('/product_details', $prod->id) }}">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{ asset(json_decode($prod->image)[0]) }}" alt="{{ $prod->name_prod }}">
                                    </div>
                                    <div class="product-caption">
                                        <h4>{{ $prod->name_prod }}</h4>
                                        <div >
                                            <h5 style="color: darksalmon"><b>Description :</b></h5>
                                            <p>{{ $prod->description }}</p>
                                        </div>
                                        <div class="price"><ins>{{ $prod->price }}.DA</ins></div>
                                        <button class="details-button">Details</button>
                                    </div>
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
                                                <a href="{{ url('/artisan_profile', $artisa->id) }}"
                                                    class="btn btn-primary">View Profile</a>
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
                                                <a href="{{ url('/deliveryman_profile', $delivery->id) }}"
                                                    class="btn btn-primary">View Profile</a>
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

                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
