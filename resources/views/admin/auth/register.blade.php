{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
@csrf

<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ml-4">
        {{ __('Register') }}
    </x-primary-button>
</div>
</form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('admin_dashboard/assets/images/favicon/favicon.png" type="image/x-icon')}}">
    <link rel="shortcut icon" href="{{asset('admin_dashboard/assets/images/favicon/favicon.png" type="image/x-icon')}}">
    <title>Pharma</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('admin_dashboard/assets/css/color-1.css" media="screen')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div>
                            <a class="logo text-center" href="{{ route('index') }}">
                                <img class="img-fluid for-light" src="{{asset('admin_dashboard/assets/images/logo/logo-2.png')}}" width="400" alt="loginpage">
                            </a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form" action="{{ route('register') }}" method="POST">
                                @csrf 
                                <h4 class="text-center">Create your account</h4>
                                <p class="text-center">Enter your personal details to create account</p>
                                <div class="form-group">
                                    <label class="col-form-label pt-0">Your Name</label>
                                    <input class="form-control" type="text" required="" name="name" placeholder="Name" required>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email" required="" name="email" placeholder="Test@gmail.com" required>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Phone</label>
                                    <input class="form-control" type="text" name="phone" required="" placeholder="017******" required>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required="" placeholder="*********" required>
                                        {{-- <div class="show-hide"><span class="show"></span></div> --}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password_confirmation" required="" placeholder="*********" required>
                                        {{-- <div class="show-hide"><span class="show"></span></div> --}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label" for="roles" >Roles</label>
                                    <select class="form-control" name="role" id="roles" required>
                                        <option value="">--Select--</option>
                                        @foreach ($roles as $role)
                                            @if ($role->name != 'Admin')
                                                <option value="{{ $role->id }}">{{ $role->name }}</option> 
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div id="add_body">

                                </div>


                                <div class="form-group">
                                    <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Create Account</button>
                                </div>
                            
                                <p class="mt-4 mb-0 text-center">Already have an account?
                                    <a class="ms-2" href="{{ route('admin.login') }}">Sign in</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- latest jquery-->
        <script src="{{asset('admin_dashboard/assets/js/jquery-3.6.0.min.js')}}"></script>
        <!-- Bootstrap js-->
        <script src="{{asset('admin_dashboard/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <!-- feather icon js-->
        <script src="{{asset('admin_dashboard/assets/js/icons/feather-icon/feather.min.js')}}"></script>
        <script src="{{asset('admin_dashboard/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{asset('admin_dashboard/assets/js/config.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "500",
                "hideDuration": "1000",
                "timeOut": "4000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>

        
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <script>
                    toastr.error('{{ $error }}');
                </script>
            @endforeach
        @endif
        
        @if(session()->get('error'))
            <script>
                toastr.error('{{ session()->get('error') }}');
            </script>
        @endif



        <script>
            $(document).ready(function () {
                $('#roles').change(function (e) { 
                    e.preventDefault();
                    console.log($(this).val());
                    
                    if ($(this).val() == 3) {
                        var content =   `<div class="form-group">
                                            <label class="form-label" for="specialty">Specialty</label>
                                            <input class="form-control" id="specialty" name="specialty" type="text" placeholder="Specialty" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label" for="hospital">Hospital</label>
                                            <input class="form-control" id="hospital" name="hospital" type="text" placeholder="Hospital" required>
                                        </div>
        
                                        <div class="form-group">
                                            <label class="form-label" for="desigation">Desigation</label>
                                            <input class="form-control" id="desigation" name="desigation" type="text" placeholder="Desigation" required>
                                        </div>`
        
        
                        $('#add_body').append(content);
                    }else{
                        $('#add_body').empty();
                    }
                });
            });
        </script>




        <script src="{{asset('admin_dashboard/assets/js/script.js')}}"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>
