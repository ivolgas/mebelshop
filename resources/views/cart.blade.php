@extends('layouts.app')

@section('content')

    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/shop/bg1.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-content text-center wow fadeInUp animated">
                        <h2>Корзина</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style2-->
    <!--Start cart area-->
    <section class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row wow fadeInUp animated">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="cart-table-box">
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th class="">Товар</th>
                                        <th class="price">Ориентировочная цена</th>
                                        <th>Количество</th>
                                        <th>Всего</th>
                                        <th class="hide-me"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="thumb-box"> <a href="shop-details-1.html" class="thumb">
                                                    <img src="assets/images/cart/10modena.jpg" alt="">
                                                </a> <a href="shop-details-1.html" class="title">
                                                    <h5> Модена </h5>
                                                </a> </div>
                                        </td>
                                        <td> от 890 BYN </td>
                                        <td class="qty">
                                            <div class="qtySelector text-center"> <span class="decreaseQty"><i
                                                        class="flaticon-minus"></i> </span> <input type="text"
                                                    class="qtyValue" value="1" /> <span class="increaseQty"> <i
                                                        class="flaticon-plus"></i> </span> </div>
                                        </td>
                                        <td class="sub-total"> от 1780 BYN</td>
                                        <td>
                                            <div class="remove"> <i class="flaticon-cross"></i> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="cart-button-box d-flex justify-content-end">
                        <div class="cart-button-box-right wow fadeInUp animated"> 
                            <a href="{{ route('catalog') }}">
                                <button class="btn--primary style2 mt-30" type="submit">Продолжить покупки</button>
                            </a>
                            <button class="btn--primary style2 mt-30" type="submit">Заказать</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-60">
                <p class="blog-page-text">* после оформления заказа наш консультант свяжется с вами в рабочие часы
                    для уточнения деталей заказа</p>
            </div>

            <!-- newsLetter_popup Start -->

            <button data-mfp-src="#newsLetter-popup" class="modal-btn d-none"></button>
            <div id="newsLetter-popup" class="mfp-hide p-4" role="dialog" style="max-width: 600px;">
                <div class="row align-items-center justify-content-sm-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 wow fadeInUp animated">
                        <div class="newsLetter-popup__content mb-4 p-0">
                            <div class="text-center">
                                <a href="index.html" class="logo">
                                    <img src="assets/images/logo/logo.svg" alt="logo">
                                </a>
                            </div>
                            <div class="text-center">
                                <br>
                                <h4> Укажите данные для связи </h4><br>
                            </div>

                            <div class="login-register-form p-0 m-0">
                                <div class="form-group mb-4"> <input type="text" class="form-control"
                                        placeholder="Ваше имя"> </div>
                                <div class="form-group"> <input type="text" class="form-control"
                                        placeholder="Номер телефона"></div>
                                <div class="checkk">
                                    <div class="form-check p-0 m-0">
                                        <input type="checkbox" id="remember">
                                        <label class="p-0" for="remember"> Согласен на обработку персональных данных
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn--primary style2"> Отправить </button>                                    
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="blog-page-single wow fadeInUp animated">
                <div class="blog-page-content">
                    <h4 class="blog-page-text text-center">Ваша корзина пуста.</h4>

                    <div class="cart-button-box d-flex justify-content-end">
                        <div class="cart-button-box-right wow fadeInUp animated">
                            <button class="btn--primary mt-30" type="submit">Продолжить покупки</button>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>

    </section>
    <!--End cart area-->
    
@endsection
