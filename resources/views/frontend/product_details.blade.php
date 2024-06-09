@extends('frontend.layouts.master')
@section('title', 'product details')
@section('content')
    <style>
        .card-header {
            padding: 6px 0px;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 0px solid rgba(0, 0, 0, .125);
        }

        .card {
            border: 0px solid rgba(0, 0, 0, .125);
        }

        .card-header {
            cursor: pointer;
        }

        .toggle-icon {
            cursor: pointer;
            background: #343a40;
            padding: 6px 24px;
            border-radius: 5px;
            color: #fff;
            font-size: 17px;
            font-weight: 800;
        }

        .btn-link {
            text-decoration: none;
            font-weight: bold;
            color: #7d7d7d;
        }

        .btn-link:hover {
            text-decoration: none;
            color: #7d7d7d;
        }
    </style>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex float-right">
                        <div class="thumbnail-images">
                            <img src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg" class="img-thumbnail"
                                onclick="changeImage('{{ asset('frontend') }}/assets/images/product-img/img1.jpg')"
                                alt="Thumbnail 1">
                            <img src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg" class="img-thumbnail"
                                onclick="changeImage('{{ asset('frontend') }}/assets/images/product-img/img2.jpg')"
                                alt="Thumbnail 2">
                            <img src="{{ asset('frontend') }}/assets/images/product-img/img3.jpg" class="img-thumbnail"
                                onclick="changeImage('{{ asset('frontend') }}/assets/images/product-img/img3.jpg')"
                                alt="Thumbnail 3">
                        </div>
                        <div class="main-image mb-3">
                            <img id="main-image" src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg"
                                class="img-fluid" alt="Product Image">
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="product-name">Product Name</h1>
                    <p class="product-price">Price: Tk 500</p>
                    <p class="product-description">This is a great product that you will love. It has many amazing features
                        and benefits that make it a must-have item.</p>

                    <div class="color-selection mb-3">
                        <label for="color">Color:</label>
                        <div class="d-flex">
                            <div class="color-box bg-primary"></div>
                            <div class="color-box bg-secondary"></div>
                            <div class="color-box bg-success"></div>
                        </div>
                    </div>

                    <div class="size-selection mb-3">
                        <label for="size">Size:</label>
                        <select id="size" class="form-control w-50">
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                        </select>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3 mb-2">
                            <div class="input-group mt-1">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="decrementValue()">-</button>
                                </div>
                                <input type="text" id="quantity" class="form-control text-center" value="1"
                                    readonly>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="incrementValue()">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-dark btn-lg btn-block mb-3" onclick="addToCart()">Add to Cart</button>
                        </div>
                    </div>

                    <div class="action-buttons mb-3">
                        <button class="btn btn-danger btn-lg btn-block col-md-7" onclick="buyNow()">Buy Now</button>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <div class="accordion mb-3" id="accordionExample">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center"
                                        id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Description
                                            </button>
                                        </h5>
                                        <span class="toggle-icon" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne"><i
                                                class="fa fa-plus"></i></span>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the first accordion panel. This panel is shown by
                                            default, thanks to the <code>.show</code> class.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center"
                                        id="headingTow">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                Review
                                            </button>
                                        </h5>
                                        <span class="toggle-icon" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="true" aria-controls="collapseTwo"><i
                                                class="fa fa-plus"></i></span>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTow"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the first accordion panel. This panel is shown by
                                            default, thanks to the <code>.show</code> class.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@push('scripts')
    <script>
        function changeImage(imageSrc) {
            document.getElementById('main-image').src = imageSrc;
        }

        function incrementValue() {
            const quantityInput = document.getElementById('quantity');
            let value = parseInt(quantityInput.value);
            quantityInput.value = value + 1;
        }

        function decrementValue() {
            const quantityInput = document.getElementById('quantity');
            let value = parseInt(quantityInput.value);
            if (value > 1) {
                quantityInput.value = value - 1;
            }
        }
        //Product description collapse
        $(document).ready(function() {
            $('.collapse').on('show.bs.collapse', function() {
                $(this).prev('.card-header').find('.toggle-icon').html('<i class="fa fa-minus"></i>');
            });

            $('.collapse').on('hide.bs.collapse', function() {
                $(this).prev('.card-header').find('.toggle-icon').html('<i class="fa fa-plus"></i>');
            });
        });
    </script>
@endpush
