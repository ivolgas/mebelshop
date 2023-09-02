@extends('layouts.app')

@section('content')

    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/shop/bg2.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-content text-center wow fadeInUp animated">
                        <h2>Односпальные кровати</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style2-->

    <!--Start Shop Details Breadcrumb-->
    <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="shop-details-inner">
                        <ul class="shop-details-menu">
                            <li><a href="index.html">Односпальные кровати</a></li>
                            <li class="active">Модена</li>
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
            <div class="row mt--30">
                <div class="col-xl-9 col-lg-9 mt-30 wow fadeInUp animated ">
                    <div class="single-product-box two">
                        <div class="product-slicknav single-product-two-nav slider-nav">
                            <div> <span class="single-item"> <img src="assets/images/product-cards/10modena.jpg" alt="">
                                </span> </div>
                            <div> <span class="single-item"> <img src="assets/images/product-cards/10modena1.jpg" alt="">
                                </span> </div>
                            <div> <span class="single-item"> <img src="assets/images/product-cards/10modena2.jpg" alt="">
                                </span> </div>
                        </div>
                        <div class="big-product single-product-two slider-for">
                            <div>
                                <div class="single-item">
                                    <img src="assets/images/product-cards/10modena.jpg" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="single-item">
                                    <img src="assets/images/product-cards/10modena1.jpg" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="single-item">
                                    <img src="assets/images/product-cards/10modena2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 mt-30 wow fadeInUp animated">
                    <div class="shop-details-top-right two">
                        <div class="shop-details-top-right-content-box">
                            <div class="shop-details-top-title m-0">
                                <h3>Модена</h3>
                            </div>
                            <div class="shop-details-top-price-box d-flex align-items-center flex-wrap mt-30">
                                <h3 class="pe-1"> от 890 BYN </h3>
                            </div>
                            <div class="shop-details-top-color-sky-box mt-30">
                                <h4>Цвет</h4>
                                <ul class="varients">
                                    <li> 
                                        <img class="shop-details-top-color-sky-img" src="assets/images/colors/4829584.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="product-quantity mt-30">
                                <h4>Количество</h4>
                                <div class="product-quantity-box d-flex align-items-center flex-wrap">
                                    <div class="qty mr-2">
                                        <div class="qtySelector text-center"> <span class="decreaseQty"><i
                                                    class="flaticon-minus"></i> </span> <input type="text"
                                                class="qtyValue" value="1" /> <span class="increaseQty"> <i
                                                    class="flaticon-plus"></i> </span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-details-top-cart-box-btn mt-30"> <button class="btn--primary style2 "
                                    type="submit">Добавить в корзину</button> </div>
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
                                    <p class="blog-page-text">
                                        <span><strong>Цвет:</strong> большой выбор цветов на ваш вкус</span><br>
                                        <span><strong>Материал:</strong> большой выбор материалов на ваш вкус</span><br>
                                        <span><strong>Размеры и комплектация:</strong> определяются в ходе консультации</span><br>
                                        <span><strong>Гарантия:</strong> 24 месяца</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-additional" role="tabpanel"
                        aria-labelledby="pills-additional-tab">
                        <div class="product-drescription">
                            <div class="blog-page-single fadeInUp animated">
                                <div class="blog-page-content">
                                    <p class="blog-page-text">Лаконичный и универсальный дизайн кровати Модена с
                                        правильными
                                        прямоугольными формами придаст спальне завершенный вид. Вертикальные строчки
                                        с
                                        углублением визуально делают изголовье выше, тем самым добавляя высоты
                                        пространству
                                        комнаты. Комплектуется вместительной системой хранения на безопасных и
                                        прочных
                                        газовых механизмах подъема.</p>
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
