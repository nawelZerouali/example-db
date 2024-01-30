

<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>JustClick</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="200x200" href="artisan/vendors/images/justCLICK.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="artisan/vendors/images/justCLICK.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="artisan/vendors/images/justCLICK.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="artisan/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="artisan/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="artisan/vendors/styles/style.css" />
    @stack('stylesheets')
  <style>
    body {
    margin: 0;
    padding: 0; 
    background: url('artisan/vendors/images/background.png') no-repeat center center fixed;
    background-size: cover;
    }
  </style>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="\">
                    <img src="artisan/vendors/images/apple-touch-icon1.png" alt="" />
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 col-lg-7">
                    <img src="artisan/vendors/images/login-page-img11.png" alt=""  />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To JustClick</h2><br><br>
                            <!--img src="artisan/vendors/images/justCLICK.png" alt="" /-->
                        </div>
                        <!--x-guest-layout-->

                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="input-group custom">

                                    <x-input-label  for="email" />
                                    <x-text-input  id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username" />
                                    <div class="input-group-append custom">
										<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
									</div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-8" />
                                </div>


                                <div class="input-group custom">

                                    <x-input-label  for="password"  />

                                    <x-text-input  id="password" class="form-control form-control-lg"
                                                    type="password"
                                                    name="password"
                                                    placeholder="password"
                                                    required autocomplete="current-password" />
                                                    <div class="input-group-append custom">
                                                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                                    </div>

                                    <x-input-error :messages="$errors->get('password')" class="mt-8" />
                                </div>


                                <div class="row pb-30">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox">

                                                <label  for="remember_me">
                                                    <input  id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                                                    <span class="custom-control-label">{{ __('Remember me') }}</span>
                                                </label>
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="forgot-password">
                                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                {{ __('Forgot password?') }}
                                            </a>
                                         @endif

                                    </div>
                                </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">

                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        <!--x-guest-layout-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="artisan/vendors/scripts/core.js"></script>
    <script src="artisan/vendors/scripts/script.min.js"></script>
    <script src="artisan/vendors/scripts/process.js"></script>
    <script src="artisan/vendors/scripts/layout-settings.js"></script>

</body>

</html>
