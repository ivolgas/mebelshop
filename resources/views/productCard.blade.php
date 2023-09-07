@extends('layouts.app')

@section('content')

    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/shop/bg2.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-content text-center wow fadeInUp animated">
                        <h2>Кровать {{ $product->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style2-->


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    
    <!--Start Shop Details Breadcrumb-->
    <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="shop-details-inner">
                        <ul class="shop-details-menu">
                            <li><a href="{{ asset('catalog') }}"> Католог </a></li>
                            <li><a href="{{ asset('catalog/'.$product->category_id) }}"> Кровать {{ $product->cat_name }} </a></li>
                            <li class="active">{{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Shop Details Breadcrumb-->

    <!--Start Shop Details Top-->

    <section class="shop-details-top">
        <div class="container">
            <div class="row mt--60">
                <div class="col-xl-9 col-lg-9 mt-30 wow fadeInUp animated ">
                    <div class="single-product-box two">
                        <div class="product-slicknav single-product-two-nav slider-nav">
                            <div> <span class="single-item">
                                <img src="{{ asset('assets/images/product-cards') }}/{{ $product->image }}" alt=""/>
                                </span> </div>
                            <div> <span class="single-item"> 
                                <img src="{{ asset('assets/images/product-cards') }}/{{ $product->image_slider_1 }}" alt=""/>
                                </span> </div>
                            <div> <span class="single-item"> 
                                <img src="{{ asset('assets/images/product-cards') }}/{{ $product->image_slider_2 }}" alt=""/>
                                </span> </div>
                        </div>
                        <div class="big-product single-product-two slider-for">
                            <div>
                                <div class="single-item">
                                    <img src="{{ asset('assets/images/product-cards') }}/{{ $product->image }}" alt=""/>
                                </div>
                            </div>
                            <div>
                                <div class="single-item">
                                    <img src="{{ asset('assets/images/product-cards') }}/{{ $product->image_slider_1 }}" alt=""/>
                                </div>
                            </div>
                            <div>
                                <div class="single-item">
                                    <img src="{{ asset('assets/images/product-cards') }}/{{ $product->image_slider_2 }}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 mt-30 wow fadeInUp animated">
                    <div class="shop-details-top-right two">
                        <div class="shop-details-top-right-content-box">
                            <div class="shop-details-top-title m-0">
                                <h3>{{ $product->name }}</h3>
                            </div>
                            <div class="shop-details-top-price-box d-flex align-items-center flex-wrap mt-30">
                                <h3 class="pe-1"> от {{ $product->price }} BYN </h3>
                            </div>
                            <div class="shop-details-top-color-sky-box mt-30">
                                <h4>Цвет модели</h4>
                                <ul class="varients">
                                    <li> 
                                        <img class="shop-details-top-color-sky-img" src="{{ asset('assets/images/colors') }}/{{ $product->image_color }}" alt="">
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="shop-details-top-cart-box-btn mt-60"> 
                                <a href="{{ asset('product_card/'. $product->id) }}"><button class="btn--primary style2" type="submit">Добавить в корзину</button></a>
                            </div>
                            <div class="shop-details-top-social-box mt-30">
                                <p>Поделиться:</p>
                                <ul class="ps-1 social_link d-flex align-items-center">
                                    <li> <a href="https://www.facebook.com/" target="_blank" class="active"><i
                                                class="flaticon-facebook-app-symbol"></i></a></li>
                                    <li><a href="https://www.youtube.com/" target="_blank"><i
                                                class="flaticon-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i
                                                class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Shop Details Top-->

    <!-- productdrescription-tabStart -->
    <section class="product pt-60 pb-60 wow fadeInUp overflow-hidden ">
        <div class="container ">
            <div class="row wow fadeInUp animated">
                <div class="col-12">
                    <ul class="nav product-details-nav nav-three nav-pills justify-content-center"
                        id="pills-tab-two" role="tablist">
                        <li class="nav-item" role="presentation"> <button class="nav-link active"
                                id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description"
                                type="button" role="tab" aria-controls="pills-description" aria-selected="true">
                                Характеристики </button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="pills-additional-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-additional" type="button" role="tab"
                                aria-controls="pills-additional" aria-selected="false"> Описание </button> </li>
                    </ul>
                </div>
            </div>
            <div class="row wow fadeInUp animated">
                <div class="tab-content" id="pills-tabContent-two">
                    <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                        aria-labelledby="pills-description-tab">
                        <div class="product-drescription">
                            <div class="blog-page-single wow fadeInUp animated">
                                <div class="blog-page-content">
                                    <p class="blog-page-text">{!! $product->property !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-additional" role="tabpanel"
                        aria-labelledby="pills-additional-tab">
                        <div class="product-drescription">
                            <div class="blog-page-single fadeInUp animated">
                                <div class="blog-page-content">
                                    <p class="blog-page-text">{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- productdrescription-tab End -->

    
    
@endsection
