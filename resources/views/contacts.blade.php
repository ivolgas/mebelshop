@extends('layouts.app')

@section('content')

    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/shop/bg1.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-content text-center wow fadeInUp animated">
                        <h2>Наши контакты</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style2-->
    <!--Start Contact Page Info-->
    <section class="contact-page-info pt-120 pb-60">
        <div class="container">
            <div class="row mt--30">
                <div class="col-xl-4 col-lg-6 wow fadeInUp animated">
                    <div class="contact-page-info__single mt-30">
                        <div class="thumb"> <img src="assets/images/contacts/location.png" alt=""> </div>
                        <div class="contact-box">
                            <h4>Наш адрес</h4>
                            <p class="text1">Республика Беларусь, г. Минск, ул. Стебенева, 4</p> <br>
                            <p class="text1">Адрес производства:</p><br>
                            <p class="text2">220075, Республика Беларусь, <br> г. Минск, ул. Селицкого, 260</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp animated">
                    <div class="contact-page-info__single mt-30">
                        <div class="thumb"> <img src="assets/images/contacts/contact.png" alt=""> </div>
                        <div class="contact-box">
                            <h4>Наши контакты</h4>
                            <ul>
                                <li>
                                    <p>А1: <a href="tel:+375442556285">+375 (44) 255-62-85</a></p><br>
                                </li>
                                <li>
                                    <p>МТС: <a href="tel:+375332556285">+375 (33) 255-62-85</a></p><br>
                                </li>
                                <li>
                                    <p>E-mail: <a href="mailto:sleepshop@gmail.com">sleepshop@gmail.com</a></p>
                                    <br><br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp animated">
                    <div class="contact-page-info__single mt-30 ">
                        <div class="thumb"> <img src="assets/images/contacts/clockt.png" alt=""> </div>
                        <div class="contact-box">
                            <h4>Время работы</h4>
                            <p class="text1">Пн: выходной</p><br>
                            <p class="text1">Вт - Пт: 10:00 - 20:00</p><br>
                            <p class="text1">Сб, Вс: 11:00 - 20:00</p><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Info-->
    
@endsection
