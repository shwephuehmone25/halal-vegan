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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{ asset('css/theme.css') }}"rel="stylesheet" />
    <style>
        .card-img-overlay {
            pointer-events: none;
        }

        .card-img-overlay .badge {
            pointer-events: auto;
        }
    </style>
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
                        {{-- <p class="mb-0 fw-bold text-lg-center">Deliver to: <i
                                class="fas fa-map-marker-alt text-primary mx-2"></i><span class="fw-normal">Current
                                Location </span><span>Mirpur 1 Bus Stand, Dhaka</span></p> --}}
                    </div>
                    <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
                        <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                            <input class="form-control border-0 input-box bg-100" type="search"
                                placeholder="Search Food" aria-label="Search" />
                        </div>
                        {{-- <button class="btn btn-white shadow-warning text-warning" type="submit"> <i class="fas fa-user me-2"></i>Login</button> --}}
                    </form>
                </div>
            </div>
        </nav>
        <section class="py-5 overflow-hidden bg-primary" id="home">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner"
                            href="#!"><img class="img-fluid" src="{{ asset('img/hero-header.png') }}"
                                alt="hero-header" /></a></div>
                    <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
                        <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you Hungry?</h1>
                        <h1 class="text-800 mb-5 fs-4">Let’s get you tasty Halal & vegetarian eats — with awesome deals
                            to match<br class="d-none d-xxl-block" />around the corner!</h1>
                        <div class="card w-xxl-75">
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @foreach ($cities as $index => $city)
                                            <button
                                                class="nav-link {{ request('city') == $city || (!request('city') && $index === 0) ? 'active' : '' }} mb-3"
                                                id="nav-{{ Str::slug($city) }}-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-{{ Str::slug($city) }}" type="button"
                                                role="tab" aria-controls="nav-{{ Str::slug($city) }}"
                                                aria-selected="{{ request('city') == $city || (!request('city') && $index === 0) ? 'true' : 'false' }}"
                                                onclick="window.location.href='{{ url('/?city=' . urlencode($city)) }}'">
                                                <i class="fas fa-map-marker-alt me-2"></i>{{ $city }}
                                            </button>
                                        @endforeach
                                    </div>
                                </nav>

                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <form class="row gx-2 gy-2 align-items-center">
                                            <div class="col">
                                                <div class="input-group-icon"><i
                                                        class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                    <label class="visually-hidden" for="inputDelivery">Address</label>
                                                    <input class="form-control input-box form-foodwagon-control"
                                                        id="inputDelivery" type="text"
                                                        placeholder="Enter Your Address" />
                                                </div>
                                            </div>
                                            <div class="d-grid gap-3 col-sm-auto">
                                                <button class="btn btn-danger" type="submit">Find Food</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <form class="row gx-4 gy-2 align-items-center">
                                            <div class="col">
                                                <div class="input-group-icon"><i
                                                        class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                    <label class="visually-hidden" for="inputPickup">Address</label>
                                                    <input class="form-control input-box form-foodwagon-control"
                                                        id="inputPickup" type="text"
                                                        placeholder="Enter Your Address" />
                                                </div>
                                            </div>
                                            <div class="d-grid gap-3 col-sm-auto">
                                                <button class="btn btn-danger" type="submit">Find Food</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">

            <div class="container">
                <div class="row h-100 gx-2 mt-7">
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                        <div class="card card-span h-100">
                            <div class="position-relative"> <img class="img-fluid rounded-3 w-100"
                                    src="{{ asset('img/discount-item-1.png') }}" alt="..." />
                                <div class="card-actions">
                                    <div class="badge badge-foodwagon bg-primary p-4">
                                        <div class="d-flex flex-between-center">
                                            <div class="text-white fs-7">15</div>
                                            <div class="d-block text-white fs-2">% <br />
                                                <div class="fw-normal fs-1 mt-2">Off</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <h5 class="fw-bold text-1000 text-truncate">Flat Hill Slingback</h5><span
                                    class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days
                                        Remaining</span></span>
                            </div><a class="stretched-link" href="#"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                        <div class="card card-span h-100">
                            <div class="position-relative"> <img class="img-fluid rounded-3 w-100"
                                    src="{{ asset('img/discount-item-2.png') }}" alt="..." />
                                <div class="card-actions">
                                    <div class="badge badge-foodwagon bg-primary p-4">
                                        <div class="d-flex flex-between-center">
                                            <div class="text-white fs-7">10</div>
                                            <div class="d-block text-white fs-2">% <br />
                                                <div class="fw-normal fs-1 mt-2">Off</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <h5 class="fw-bold text-1000 text-truncate">Ocean Blue Ring</h5><span
                                    class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days
                                        Remaining</span></span>
                            </div><a class="stretched-link" href="#"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                        <div class="card card-span h-100">
                            <div class="position-relative"> <img class="img-fluid rounded-3 w-100"
                                    src="{{ asset('img/discount-item-3.png') }}" alt="..." />
                                <div class="card-actions">
                                    <div class="badge badge-foodwagon bg-primary p-4">
                                        <div class="d-flex flex-between-center">
                                            <div class="text-white fs-7">25</div>
                                            <div class="d-block text-white fs-2">% <br />
                                                <div class="fw-normal fs-1 mt-2">Off</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <h5 class="fw-bold text-1000 text-truncate">Brown Leathered Wallet</h5><span
                                    class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days
                                        Remaining</span></span>
                            </div><a class="stretched-link" href="#"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
                        <div class="card card-span h-100">
                            <div class="position-relative"> <img class="img-fluid rounded-3 w-100"
                                    src="{{ asset('img/discount-item-4.png') }}" alt="..." />
                                <div class="card-actions">
                                    <div class="badge badge-foodwagon bg-primary p-4">
                                        <div class="d-flex flex-between-center">
                                            <div class="text-white fs-7">20</div>
                                            <div class="d-block text-white fs-2">% <br />
                                                <div class="fw-normal fs-1 mt-2">Off</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <h5 class="fw-bold text-1000 text-truncate">Silverside Wristwatch</h5><span
                                    class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 days
                                        Remaining</span></span>
                            </div><a class="stretched-link" href="#"></a>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        {{-- <section class="py-0 bg-primary-gradient">

            <div class="container">
                <div class="row justify-content-center g-0">
                    <div class="col-xl-9">
                        <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                            <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('img/location.png') }}" height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Select location</h5>
                                    <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon" src="{{ asset('img/order.png') }}"
                                        height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Choose order</h5>
                                    <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon" src="{{ asset('img/pay.png') }}"
                                        height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Pay advanced</h5>
                                    <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon" src="{{ asset('img/meals.png') }}"
                                        height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                                    <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section> --}}
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <section id="testimonial">
            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mb-6">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Most Popular Restaurants</h5>
                    </div>
                </div>
                <div class="row gx-2">
                    @foreach ($restaurants as $restaurant)
                        <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                            <div class="card card-span h-100 text-white rounded-3"
                                onclick="window.location.href='{{ route('restaurants.show', $restaurant->id) }}'"
                                style="cursor: pointer;">

                                <img class="img-fluid rounded-3 h-100" src="{{ Storage::disk('s3')->url($restaurant->image) }}"
                                    alt="{{ $restaurant->name }}" />

                                <div class="card-img-overlay ps-0">
                                    <span class="badge bg-danger p-2 ms-3">
                                        <i class="fas fa-clock me-2 fs-0"></i><span class="fs-0">open now</span>
                                    </span>
                                    <span class="badge bg-primary ms-2 me-1 p-2">
                                        <i class="fas fa-tag me-1 fs-0"></i><span
                                            class="fs-0">{{ $restaurant->type }}</span>
                                    </span>
                                </div>

                                <div class="card-body ps-0">
                                    <div class="d-flex align-items-center mb-3">
                                        <img class="img-fluid" src="{{ asset('img/food-world-logo.png') }}"
                                            alt="" />
                                        <div class="flex-1 ms-3">
                                            <h5 class="mb-0 fw-bold text-1000">{{ $restaurant->name }}</h5>
                                            <span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span>
                                            <span class="mb-0 text-primary">46</span>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <a href="{{ route('restaurants.show', $restaurant->id) }}"
                                            class="badge bg-soft-danger p-2 text-decoration-none" role="button">
                                            <span class="fw-bold fs-1 text-danger">View Details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-primary"
                            href="#!">See More<i class="fas fa-chevron-right ms-2"> </i></a></div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-8 overflow-hidden">

            <div class="container">
                <div class="row flex-center mb-6">
                    <div class="col-lg-7">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">Search by Food</h5>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center"><a class="btn btn-lg text-800 me-2" href="#"
                            role="button">VIEW ALL <i class="fas fa-chevron-right ms-2"></i></a></div>
                    <div class="col-lg-auto position-relative">
                        <button class="carousel-control-prev s-icon-prev carousel-icon" type="button"
                            data-bs-target="#carouselSearchByFood" data-bs-slide="prev"><span
                                class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span
                                class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next s-icon-next carousel-icon" type="button"
                            data-bs-target="#carouselSearchByFood" data-bs-slide="next"><span
                                class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span
                                class="visually-hidden">Next</span></button>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-12">
                        <div class="carousel slide" id="carouselSearchByFood" data-bs-touch="false"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/search-pizza.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/burger.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/noodles.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Noodles</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/sub-sandwich.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Sub-sandwiches</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/chowmein.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Chowmein</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/steak.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/search-pizza.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/burger.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/noodles.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Noodles</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/sub-sandwich.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Sub-sandwiches</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/chowmein.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Chowmein</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/steak.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3000">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/search-pizza.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/burger.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/noodles.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Noodles</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/sub-sandwich.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Sub-sandwiches</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/chowmein.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Chowmein</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/steak.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/search-pizza.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/burger.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/noodles.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Noodles</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/sub-sandwich.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Sub-sandwiches</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/chowmein.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">
                                                        Chowmein</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ asset('img/steak.png') }}" alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section>
            <div class="bg-holder"
                style="background-image:url('{{ asset('img/cta-one-bg.png') }}'); background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card card-span shadow-warning" style="border-radius: 35px;">
                            <div class="card-body py-5">
                                <div class="row justify-content-evenly">
                                    <div class="col-md-3">
                                        <div
                                            class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                            <img src="{{ asset('img/discounts.png') }}" width="100"
                                                alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Daily<br
                                                        class="d-none d-md-block" />Discounts </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hr-vertical">
                                        <div
                                            class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                            <img src="{{ asset('img/live-tracking.png') }}" width="100"
                                                alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Live Tracking</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hr-vertical">
                                        <div
                                            class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                            <img src="{{ asset('img/quick-delivery.png') }}" width="100"
                                                alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Save Time
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row flex-center mt-md-8">
                    <div class="col-lg-5 d-none d-lg-block" style="margin-bottom: -122px;"> <img class="w-100"
                            src="{{ asset('img/phone-cta-one.png') }}" alt="..." /></div>
                    <div class="col-lg-5 mt-7 mt-md-0">
                        <h1 class="text-primary">Install the app</h1>
                        <p>It's never been easier to order food. Look for the finest <br
                                class="d-none d-xl-block" />discounts and you'll be lost in a world of delectable
                            food.</p><a class="pe-2" href="https://www.apple.com/app-store/" target="_blank"><img
                                src="{{ asset('img/app-store.svg') }}" width="160" alt="" /></a><a
                            href="https://play.google.com/store/apps" target="_blank">
                            <img src="{{ asset('img/google-play.svg') }}" width="160" alt="" /></a>
                    </div>
                </div> --}}
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-5 pt-8">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                            class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                            src="{{ asset('img/crispy-sandwiches.png') }}" alt="..." /></div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Best deals <span class="text-primary">
                                                Crispy Sandwiches</span></h1>
                                        <p class="fs-1">Savor big, hearty sandwiches — all Halal and vegetarian!
                                            Complete your meal with the perfect bite of fresh, delicious goodness.</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                                href="#!">PROCEED TO ORDER<i
                                                    class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img
                                            class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0"
                                            src="{{ asset('img/fried-chicken.png') }}" alt="..." /></div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Party time calls for <span
                                                class="text-primary">crispy Halal fried chicken!</span></h1>
                                        <p class="fs-1">Go big with crispy Halal fried chicken, spiced with lemon
                                            chili goodness. Snag the best deals now!</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                                href="#!">PROCEED TO ORDER<i
                                                    class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                            class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                            src="{{ asset('img/pizza.png') }}" alt="..." /></div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Craving hot & <span
                                                class="text-primary">spicy Pizza?</span></h1>
                                        <p class="fs-1">Grab a friend and dive into sizzling, crispy pizza pops — all
                                            Halal and vegetarian! Don’t miss the best deals around.</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                                href="#!">PROCEED TO ORDER<i
                                                    class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->

        <!-- <section> begin ============================-->
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
                        <p class="text-200 text-center">All rights Reserved &copy; Halal Vegan, <span
                                id="currentYear"></span></p>
                    </div>
                </div>
            </div><!-- end of .container-->

            <!-- Back to Top Button -->
            <button id="backToTop" title="Go to top">↑</button>

            <style>
                #backToTop {
                    display: none;
                    position: fixed;
                    bottom: 30px;
                    right: 30px;
                    z-index: 99;
                    font-size: 18px;
                    border: none;
                    outline: none;
                    background-color: #C9A23F;
                    color: #333;
                    cursor: pointer;
                    padding: 12px 16px;
                    border-radius: 80%;
                    transition: background-color 0.3s;
                }

                #backToTop:hover {
                    background-color: #555;
                }
            </style>

            <script>
                // Back to Top functionality
                const backToTopBtn = document.getElementById("backToTop");

                window.onscroll = function() {
                    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                        backToTopBtn.style.display = "block";
                    } else {
                        backToTopBtn.style.display = "none";
                    }
                };

                backToTopBtn.addEventListener("click", () => {
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });
                });
            </script>

        </section>

        <!-- <section> close ============================-->

    </main>
    <!--    End of Main Content-->

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
