<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    Document Title-->
    <title>Halal | Vegan</title>

    <!--    Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.ico') }}">
    <link rel="manifest" href="{{ asset('img/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('img/logo.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--    Stylesheets-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{ asset('css/theme.css') }}"rel="stylesheet" />
    <link href="{{ asset('css/style.min.css') }}"rel="stylesheet" />

</head>

<body>

    <!--    Main Content-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block"
                        src="{{ asset('img/logo.svg') }}" alt="logo" /><span
                        class="text-1000 fs-3 fw-bold ms-2 text-gradient">halalVegan</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
                    <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
                        <p class="mb-0 fw-bold text-lg-center">Address: <i
                                class="fas fa-map-marker-alt text-primary mx-2"></i><span
                                class="fw-normal">{{ $restaurant->location }} </span></p>
                    </div>

                    <div class="input-group-icon pe-2">
                        <p class="mb-0 fw-bold text-lg-center">Phone No: <i
                                class="fas fa-phone-alt text-primary mx-2"></i><span
                                class="fw-normal">{{ $restaurant->phone_number }} </span></p>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 position-relative overlay-bottom" style="background-image: url('{{ asset($restaurant->image) }}');">
            <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
                style="min-height: 400px;">
                <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
                <div class="d-inline-flex mb-lg-5">
                    <p class="m-0 text-white"><a class="text-white" href="{{ route('restaurants.index') }}">Home</a>
                    </p>
                    <p class="m-0 text-white px-2">/</p>
                    <p class="m-0 text-white">Menu</p>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Menu Start -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                    <h1 class="display-4">Competitive Pricing</h1>
                </div>

                <div class="row">
                    @foreach ($restaurant->menus->where('is_available', true)->groupBy('category') as $category => $menus)
                        <div class="col-lg-6 mb-5">
                            <h1 class="mb-5">{{ $category }} Food</h1>

                            @foreach ($menus as $menu)
                                <div class="row align-items-center mb-5">
                                    <div class="col-4 col-sm-3">
                                        @if ($menu->image)
                                            <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                                src="{{ asset($menu->image) }}" alt="{{ $menu->name }}">
                                        @else
                                            <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                                src="{{ asset('img/default-food.jpg') }}" alt="{{ $menu->name }}">
                                        @endif
                                    </div>
                                    <div class="col-8 col-sm-9">
                                        <h4>{{ $menu->name }}</h4>
                                        <p class="m-0">{{ $menu->description ?? 'No description available.' }}</p>
                                        <h6 class="m-0" style="color: #C9A23F; font-weight: bold;">
                                            {{ $menu->price == floor($menu->price) ? number_format($menu->price) : number_format($menu->price, 2) }}
                                            MMK
                                        </h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Menu End -->

        <!-- ============================================-->
        <!-- <footer section> begin ============================-->
        <section class="py-0 pt-7 bg-1000">

            <div class="container">
                <div class="row justify-content-lg-between">
                    <h5 class="lh-lg fw-bold text-white">OUR TOP CITIES</h5>
                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Yangon</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Mandalay</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San
                                    Diego</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">East
                                    Bay</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Long
                                    Beach</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Los
                                    Angeles</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Washington
                                    DC</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Seattle</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Portland</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Nashville</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New York
                                    City</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Orange
                                    County</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Atlanta</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Charlotte</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Denver</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-4 col-lg-auto mb-3">
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Columbus</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New
                                    Mexico</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none"
                                    href="#!">Albuquerque</a></li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Sacramento</a>
                            </li>
                            <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New
                                    Orleans</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="text-900" />

                <hr class="border border-800" />
                <div class="row flex-center pb-3">
                    <div class="col-md-12 order-0">
                        <p class="text-200 text-center text-md-start">All rights Reserved &copy; Halal Vegan, <span
                                id="currentYear"></span></p>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->

    </main>
    <!--    End of Main Content-->

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>

    <!--    JavaScripts-->

    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/js/bootstrap.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
    <script src="{{ asset('js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap"
        rel="stylesheet">
</body>

</html>
