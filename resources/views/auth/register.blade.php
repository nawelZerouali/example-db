<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>JustClick</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="artisan/vendors/images/apple-touch-icon1.png" />
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
    <link rel="stylesheet" type="text/css" href="artisan/src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="artisan/vendors/styles/style.css" />
    <style>
        .additional-fields {
            display: none;
        }

    body {
    margin: 0;
    padding: 0;
    background: url('artisan/vendors/images/register.png') no-repeat center center fixed;
    background-size: cover;
    }
    .label-file {

    border-block-color: #0000
    cursor: pointer;
    color: #0000;
    font:antialiased;
}
.label-file:hover {
    color: #d1a647;
}

// et on masque le input
.input-file {
    display: none;
}

    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
    <script>
        function showAdditionalFields(option) {
            // Masquer tous les champs supplémentaires
            var allFields = document.querySelectorAll('.additional-fields');
            allFields.forEach(function(field) {
                field.style.display = 'none';
            });

            // Afficher les champs supplémentaires spécifiques à l'option sélectionnée
            var optionFields = document.getElementById(option + 'Fields');
            if (optionFields) {
                optionFields.style.display = 'block';
            }
        }
    </script>


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
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="artisan/vendors/images" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="register-box bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <form class="tab-wizard2 wizard-circle wizard" method="POST"
                                action="{{ route('register') }}" id="register-form">
                                @csrf
                                <h5>Basic Account Credentials</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto" >
                                        <!-- email -->
                                        <div class="form-group row align-items-center">

                                            &nbsp; &nbsp; &nbsp; <x-input-label for="email" :value="__('Email')" />
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <div class="col-sm-8 col-form-label" >
                                                <x-text-input id="email" class="form-control" type="email"
                                                    name="email" :value="old('email')" required autocomplete="username"  />
                                                <x-input-error :messages="$errors->get('email')" class="col-sm-8" />
                                            </div>
                                        </div>
                                        <!-- phone -->
                                        <div class="form-group row align-items-center">
                                            <!--label class="col-sm-4 col-form-label">Username*</label>
            <div class="col-sm-8">
             <input type="text" class="form-control" />
            </div-->
                                            &nbsp; &nbsp; &nbsp; <x-input-label for="phone" :value="__('Phone')" />
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <div class="col-sm-8 col-form-label">
                                                <x-text-input id="phone" class="form-control" type="tel"
                                                    maxlength="11" name="phone" :value="old('phone')" autofocus required
                                                    autocomplete="tel" />
                                                <x-input-error :messages="$errors->get('phone')" class="col-sm-4" />
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group row align-items-center">

                                            &nbsp; &nbsp; &nbsp; <x-input-label for="password"
                                                :value="__('Password')" />&nbsp; &nbsp; &nbsp;
                                            <div class="col-sm-8 col-form-label">
                                                <x-text-input id="password" class="form-control" type="password"
                                                    name="password" required autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password')" class="col-sm-4" />
                                            </div>
                                        </div> <br>
                                        <!-- Confirm Password -->
                                        <div class="form-group row align-items-center">
                                            &nbsp; &nbsp;&nbsp; <x-input-label for="password_confirmation"
                                                :value="__('Confirm ')" />&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;

                                            <div class="col-sm-8 col-form-label">
                                                <x-text-input id="password_confirmation" class="form-control"
                                                    type="password" name="password_confirmation" required
                                                    autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password_confirmation')" class="col-sm-4" />
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h5>Personal Information</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <!-- Name -->
                                        <div class="form-group row align-items-center">
                                            <!--label class="col-sm-4 col-form-label"
             >Full Name*</label
            >
            <div class="col-sm-8">
             <input type="text" class="form-control" />
            </div-->
                                            &nbsp; &nbsp; &nbsp;<x-input-label for="name"
                                                :value="__('Name')" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <div class="col-sm-8 col-form-label">
                                                <x-text-input id="name" class="form-control" type="text"
                                                    name="name" :value="old('name')" required autofocus
                                                    autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="col-sm-4" />
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="form-group row align-items-center">
                                            &nbsp; &nbsp; &nbsp; <x-input-label for="address"
                                                :value="__('Address')" />&nbsp; &nbsp; &nbsp; &nbsp;
                                            <div class="col-sm-8 col-form-label">
                                                <x-text-input id="address" class="form-control" type="text"
                                                    name="address" :value="old('address')" autofocus
                                                    autocomplete="address" />
                                                <x-input-error :messages="$errors->get('address')" class="col-sm-4" />
                                            </div>
                                        </div>
                                        <!-- image -->
                                        <div class="form-group row align-items-center">

                                            &nbsp; &nbsp; &nbsp; <x-input-label for="image"
                                                :value="__('Image')" />&nbsp; &nbsp; &nbsp; &nbsp;
                                            <div class="col-sm-12 col-form-label">
                                                <input id="image" type="file"
                                                class="label-file" @error('image') is-invalid @enderror
                                                    name="image" autocomplete="image">
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 3 -->
                                <h5>specials informations</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <!-- Role -->
                                        <div class="form-group row  align-items-center">
                                            &nbsp; &nbsp; <x-input-label for="role" :value="__('Role')" /> &nbsp;
                                            &nbsp; &nbsp;

                                            <div class="col-sm-12 col-form-label">

                                                <div class="select-role">
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                                        <label class="btn">
                                                            <input type="radio" name="role" id="admin" value="artisan"
                                                                onclick="showAdditionalFields('artisan')">
                                                            <div class="icon" >
                                                                <img src="artisan/vendors/images/person11.png"
                                                                    class="svg" alt="">
                                                            </div>
                                                            <span>I'm</span>
                                                            Artisan
                                                        </label>


                                                        <label class="btn active">
                                                            <input type="radio" name="role" id="user" value="customer" onclick="showAdditionalFields('customer')">
                                                            <div class="icon">
                                                                <img src="artisan/vendors/images/person11.png"
                                                                    class="svg" alt="">
                                                            </div>
                                                            <span>I'm</span>
                                                            Costumer
                                                        </label>

                                                         <br>


                                                            <label class="btn ">
                                                                <input type="radio" name="role"
                                                                    id="user" value="deliveryman"
                                                                    onclick="showAdditionalFields('delivered')">
                                                                 <div class="icon">
                                                                    <img src="artisan/vendors/images/person11.png"
                                                                        class="svg" alt="">
                                                                 </div>
                                                                <span>I'm</span>
                                                                Deliveryman
                                                            </label>

                                                    </div>
                                                </div>
                                                <!-- artisan -->
                                                <div id="artisanFields" class="additional-fields">
                                                    <!-- Heur_Overture -->
                                                    <div class="form-group row  align-items-center"
                                                        id="Heur_Overture">
                                                        &nbsp; &nbsp; &nbsp; &nbsp; <x-input-label for="Heur_Overture"
                                                            :value="__('Opening time')" /> &nbsp; &nbsp; &nbsp;
                                                        <div class="col-sm-4 col-form-label">
                                                            <x-text-input id="Heur_Overture" class="form-control"
                                                                type="time" name="Heur_Overture" :value="old('Heur_Overture')"
                                                                pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]"
                                                                maxlength="5" autofocus
                                                                autocomplete="Heur_Overture" />
                                                            <x-input-error :messages="$errors->get('Heur_Overture')" class="col-sm-4" />
                                                        </div>
                                                    </div>
                                                    <!--Heur_Fermetur -->
                                                    <div class="form-group row  align-items-center"
                                                        id="Heur_Fermetur">
                                                        &nbsp; &nbsp; &nbsp; &nbsp; <x-input-label for="Heur_Fermetur"
                                                            :value="__('Closing time')" /> &nbsp;&nbsp; &nbsp; &nbsp;
                                                        <div class="col-sm-4 col-form-label">
                                                            <x-text-input id="Heur_Fermetur" class="form-control"
                                                                type="time" name="Heur_Fermetur" :value="old('Heur_Fermetur')"
                                                                pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]"
                                                                maxlength="5" autofocus
                                                                autocomplete="Heur_Fermetur" />
                                                            <x-input-error :messages="$errors->get('Heur_Fermetur')" class="col-sm-4" />
                                                        </div>
                                                    </div>
                                                    <!-- Description -->
                                                    <div class="form-group row  align-items-center" id="Description">
                                                        &nbsp; &nbsp; &nbsp; <x-input-label for="Description"
                                                            :value="__('Description')" />&nbsp; &nbsp; &nbsp;
                                                        <div class="col-sm-8 col-form-label">
                                                            <x-text-input id="Description" class="form-control"
                                                                type="textarea" name="Description" :value="old('Description')"
                                                                autofocus autocomplete="Description" />
                                                            <x-input-error :messages="$errors->get('Description')" class="col-sm-4" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- costumer -->
                                                <div id="customerFields" class="additional-fields">
                                                </div>
                                                <!-- deliveryman -->
                                                <div id="deliveredFields" class="additional-fields">
                                                    <!-- Description -->
                                                    <div class="form-group row  align-items-center" id="Description">
                                                        &nbsp; &nbsp; &nbsp; <x-input-label for="Description"
                                                            :value="__('Description')" />&nbsp; &nbsp; &nbsp;
                                                        <div class="col-sm-8 col-form-label">
                                                            <x-text-input id="Description" class="form-control"
                                                                type="textarea" name="Description" :value="old('Description')"
                                                                autofocus autocomplete="Description" />
                                                            <x-input-error :messages="$errors->get('Description')" class="col-sm-4" />
                                                        </div>
                                                    </div>
                                                    <!-- Dispo -->
                                                    <div class="form-group row align-items-center" id="Dispo">
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <x-input-label
                                                            for="Dispo" :value="__('Available')" />
                                                        <div class="col-sm-8 col-form-label">
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline pb-0">
                                                                <input type="radio" id="Yes" name="Dispo"
                                                                    value="Yes"
                                                                    {{ old('Dispo') == 'Yes' ? 'checked' : '' }}
                                                                    required autofocus autocomplete="Dispo"
                                                                    class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                    for="Yes">{{ __('Yes') }}</label>
                                                            </div>

                                                            <div
                                                                class="custom-control custom-radio custom-control-inline pb-0">
                                                                <input type="radio" id="No" name="Dispo"
                                                                    value="No"
                                                                    {{ old('Dispo') == 'No' ? 'checked' : '' }} required
                                                                    autofocus autocomplete="Dispo"
                                                                    class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                    for="No">{{ __('No') }}</label>
                                                            </div>
                                                        </div>

                                                        <x-input-error :messages="$errors->get('Dispo')" class="col-sm-4" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html Start -->
    <button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal"
        data-backdrop="static">
        Launch modal
    </button>
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Form Submitted!</h3>
                    <div class="mb-30 text-center">
                        <img src="artisan/vendors/images/success.png" />
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="javascript:void(0)" onclick="console.log($('#register-form'));$('#register-form').submit();" class="btn btn-primary">Done</a>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->



    <!-- js -->
    <script src="artisan/vendors/scripts/core.js"></script>
    <script src="artisan/vendors/scripts/script.min.js"></script>
    <script src="artisan/vendors/scripts/process.js"></script>
    <script src="artisan/vendors/scripts/layout-settings.js"></script>
    <script src="artisan/src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="artisan/vendors/scripts/steps-setting.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script src="https://cdn.jsdelivr.net/jquery.steps/1.1.0/jquery.steps.min.js"></script>


    @stack('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var formWizard = $("#register-form").steps({
                headerTag: "h5",
                bodyTag: "section",
                enableFinishButton: false,
                enablePagination: false,
                onStepChanging: function (event, currentIndex, newIndex) {
                    if (newIndex < currentIndex) {
                        return true;
                    }

                    if (currentIndex === 0 && !validateSection1()) {
                        return false;
                    } else if (currentIndex === 1 && !validateSection2()) {
                        return false;
                    } else if (currentIndex === 2 && !validateSection3()) {
                        return false;
                    }

                    return true;
                },
            });

            function validateSection1() {
                var email = $("#email").val();
                var phone = $("#phone").val();

                if (email === '' || phone === '') {
                    alert("Veuillez remplir tous les champs de la Section 1.");
                    return false;
                }

                return true;
            }

            function validateSection2() {
                var name = $("#name").val();
                var address = $("#address").val();
                var image = $("#image").val();

                if (name === '' || address === '' || image === '') {
                    alert("Veuillez remplir tous les champs de la Section 2.");
                    return false;
                }

                return true;
            }

            function validateSection3() {
                var selectedRole = $("input[name='options']:checked").val();

                if (!selectedRole) {
                    alert("Veuillez sélectionner un rôle dans la Section 3.");
                    return false;
                }

                // Validations spécifiques pour chaque rôle
                if (selectedRole === 'artisan') {
                    // Ajoutez vos validations pour le rôle "artisan"
                    var openingTime = $("#Heur_Overture").val();
                    var closingTime = $("#Heur_Fermetur").val();
                    var description = $("#Description").val();

                    if (openingTime === '' || closingTime === '' || description === '') {
                        alert("Veuillez remplir tous les champs pour le rôle 'Artisan'.");
                        return false;
                    }
                } else if (selectedRole === 'customer') {
                    // Ajoutez vos validations pour le rôle "customer"
                    // Vous pouvez ajouter des validations spécifiques au rôle "customer" ici
                } else if (selectedRole === 'delivered') {
                    // Ajoutez vos validations pour le rôle "delivered"
                    var description = $("#Description").val();
                    var availability = $("input[name='Dispo']:checked").val();

                    if (description === '' || !availability) {
                        alert("Veuillez remplir tous les champs pour le rôle 'Delivered'.");
                        return false;
                    }
                }

                return true;
            }
        });
    </script>
</body>

</html>
