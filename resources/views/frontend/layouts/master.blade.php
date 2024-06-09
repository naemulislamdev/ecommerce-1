<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <link rel="shortcut icon" href="assets/images/logo/favicon-32x32.png" type="image/x-icon">

    <!-- Font Awesome cdn link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" />
    <!-- Owl-carosul css cdn link -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('defaults/toastr/toastr.min.css') }}"> -->

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap_v4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/simple-lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bs_customize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

</head>

<body>

    <!-- Start Header & Navigation Section -->
    @include('frontend.layouts.header')
    <!--end mobile menu-->
    <!------Search canva-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="searchOffcanvas" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">SEARCH OUR SITE</h5>
            <i class="fa fa-close offcanvasClose" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" name="category">
                            <option>Select</option>
                            <option>Category 1</option>
                            <option>Category 1</option>
                            <option>Category 1</option>
                            <option>Category 1</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search your product"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="offcanva-search-title">
                        <h4>Search Results:</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------End Search canva-->
    <!------shopping cart canva-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="shoppingCartOffcanvas"
        aria-labelledby="offcanvaShoppingCard">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvaShoppingCard">SHOPPING CART</h5>
            <i class="fa fa-close offcanvasClose" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col">
                    <div class="offcanva-search-title">
                        <div class="empty-cart-box">
                            <i class="fa fa-shopping-bag"></i>
                            <h4>Your cart is empty.</h4>
                            <a href="#" class="btn btn-dark">Return to shop</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------End shopping cart canva-->
    @yield('content')

    <!-- Start  Footer Section -->
    @include('frontend.layouts.footer')
    <!-- End Copyright Section -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap_v4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bs_v5.js') }}"></script>
    <!-- Owl-carosul js file cdn link -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl-extra-code.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/simple-lightbox.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            /*mobile menu*/
            $('.menu-icon').on('click', function() {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });
            $('.mm-ci').on('click', function() {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function() {
                $(this).prev(".menu-link").find(".fa-minus").addClass("fa-minus").removeClass("fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function() {
                $(this).prev(".menu-link").find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function() {
                $(this).prev(".menu-link").find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
            });
            /*mobile-menu-click*/
            $('.mmenu-btn').click(function() {
                $(this).toggleClass("menu-link-active");
            });
        });
    </script>
    <script>
        function updateRange() {
            const minPrice = document.getElementById('min-price');
            const maxPrice = document.getElementById('max-price');
            const minPriceValue = Math.min(parseInt(minPrice.value), parseInt(maxPrice.value) - 1);
            const maxPriceValue = Math.max(parseInt(maxPrice.value), parseInt(minPrice.value) + 1);

            minPrice.value = minPriceValue;
            maxPrice.value = maxPriceValue;

            document.getElementById('min-price-value').textContent = `$${minPriceValue}`;
            document.getElementById('max-price-value').textContent = `$${maxPriceValue}`;
        }

        function filterPrices() {
            const minPrice = document.getElementById('min-price').value;
            const maxPrice = document.getElementById('max-price').value;
            alert(`Filtering items with a price between $${minPrice} and $${maxPrice}`);
            // Implement your filtering logic here
        }

        document.addEventListener('DOMContentLoaded', updateRange);
    </script>
    @stack('scripts')
</body>

</html>
