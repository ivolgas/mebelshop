@extends('layouts.app')

@section('content')
    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('/assets/images/shop/bg1.png') }});">
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
    <section class="cart-area pt-60 pb-60">

        <h4 style="text-align: center">Ваш заказ успешно оформлен!</h4>

    </section>
    <!--End cart area-->

@endsection
