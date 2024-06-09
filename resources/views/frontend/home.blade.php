@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <!------start  header main slider-->
    <section class="slider-section">
        <div class="mainslider owl-carousel owl-theme">
            <div class="item">
                <div class="image-box">
                    <img src="{{ asset('frontend') }}/assets/images/slider/slider-1.jpg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="{{ asset('frontend') }}/assets/images/slider/slider-2.jpg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="{{ asset('frontend') }}/assets/images/slider/slider-3.jpg" alt="">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="{{ asset('frontend') }}/assets/images/slider/slider-4.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!------start  header mini slider-->
    <!------start  header mini slider-->
    <section class="mini-slider-text">
        <div class="miniSlider owl-carousel owl-theme">
            <div class="item">
                <div class="miniSlider-text-box">
                    <h3>Free nationwide shipping on orders over the amount 1000 tk.</h3>
                </div>
            </div>
            <div class="item">
                <div class="miniSlider-text-box">
                    <h3>Free nationwide shipping on orders over the amount 1000 tk.</h3>
                </div>
            </div>
            <div class="item">
                <div class="miniSlider-text-box">
                    <h3>Free nationwide shipping on orders over the amount 1000 tk.</h3>
                </div>
            </div>
            <div class="item">
                <div class="miniSlider-text-box">
                    <h3>Free nationwide shipping on orders over the amount 1000 tk.</h3>
                </div>
            </div>
        </div>
    </section>
    <!------end mini slider-->
    <!------Start Product section----->
    <section class="py-3">
        <div class="container">
            <div class="d-flex justify-content-between mb-3">
                <div class="filter-box">
                    <a data-bs-toggle="offcanvas" href="#productFilter" role="button"
                        aria-controls="productFilter"><i class="fa fa-filter"></i> Filter</a>
                    <!------shopping cart canva-->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="productFilter"
                        aria-labelledby="offcanvaProductFilterCard">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvaProductFilterCard">FILTER</h5>
                            <i class="fa fa-close offcanvasClose" data-bs-dismiss="offcanvas" aria-label="Close"></i>
                        </div>
                        <div class="offcanvas-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="filter-container">
                                        <label for="min-price">Price Range:</label>
                                        <div class="slider-container">
                                            <input type="range" id="min-price" min="0" max="1000"
                                                value="100" oninput="updateRange()">
                                            <input type="range" id="max-price" min="0" max="1000"
                                                value="900" oninput="updateRange()">
                                        </div>
                                        <div class="price-values">
                                            <span id="min-price-value">$100</span> - <span
                                                id="max-price-value">$900</span>
                                        </div>
                                        <button type="button" onclick="filterPrices()">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------End shopping cart canva-->
                </div>
                <div class="grid-box">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link" id="nav-ptab2-tab" data-toggle="tab" href="#nav-ptab2"
                                role="tab" aria-controls="nav-ptab2" aria-selected="false">
                                <img src="{{ asset('frontend') }}/assets/images/icon/ptab-2.png" alt="">

                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                    href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                    <img src="{{ asset('frontend') }}/assets/images/icon/ptab-3.png" alt="">
                                </a>
                            </a>
                            <a class="nav-item nav-link" id="nav-ptab4-tab" data-toggle="tab" href="#nav-ptab4"
                                role="tab" aria-controls="nav-ptab4" aria-selected="false">
                                <img src="{{ asset('frontend') }}/assets/images/icon/ptab-4.png" alt="">
                            </a>

                            <a class="nav-item nav-link" id="nav-ptab6-tab" data-toggle="tab" href="#nav-ptab6"
                                role="tab" aria-controls="nav-ptab6" aria-selected="false">
                                <img src="{{ asset('frontend') }}/assets/images/icon/ptab-6.png" alt="">
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="select-box">
                    <select class="form-control" name="filter">
                        <option>Date, new to old</option>
                        <option>Date, new to old</option>
                        <option>Date, new to old</option>
                        <option>Date, new to old</option>
                    </select>
                </div>
            </div>


            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-ptab2" role="tabpanel" aria-labelledby="nav-ptab2-tab">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="{{ route('product.details')}}">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="{{ route('product.details')}}" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="{{ route('product.details')}}">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ptab4" role="tabpanel" aria-labelledby="nav-ptab4-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ptab6" role="tabpanel" aria-labelledby="nav-ptab6-tab">
                    <div class="row">
                        <div class="col-md-2 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="product-box">
                                <div class="product-image2">
                                    <a href="{{ route('product.details')}}">
                                        <img class="pic-1"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img1.jpg">
                                        <img class="pic-2"
                                            src="{{ asset('frontend') }}/assets/images/product-img/img2.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="#" data-tip="Add to Cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a class="add-to-cart" href="">Add to cart</a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="{{ route('product.details')}}">Women's Designer Top</a></h3>
                                    <span class="price">TK: 599.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
