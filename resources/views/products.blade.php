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

    <!--Start product-grid-->
    <div class="product-grid pt-30 pb-60">
        <div class="container">
            <div class="row gx-4 d-flex justify-content-center">
                <div class="col-xl-9 col-lg-8">
                    <div class="row ">
                        <div class="col-12">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                    aria-labelledby="pills-grid-tab">
                                    <div class="row">

                                        @foreach ($products as $product)

                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                            <div class="products-three-single w-100  mt-30">
                                                <div class="products-three-single-img"> <a
                                                        href="shop-details-3.html" class="d-block"> <img
                                                            src="assets/images/products/modena1.png"
                                                            class="first-img" alt="" /> <img
                                                            src="assets/images/products/modena1.png" alt=""
                                                            class="hover-img" />
                                                    </a>
                                                    <a href="{{ route('productCard') }}" class="addcart btn--primary style2"> Перейти
                                                        к товару </a>
                                                </div>

                                                <div class="products-three-single-content text-center">
                                                    <span>Кровать односпальная</span>
                                                    <h5><a href="shop-details-3.html"> {{ $product->name }} </a></h5>
                                                    <p>от {{ $product->price }} BYN</p>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach                                        
                                        
                                        {{-- <div class="col-xl-4 col-lg-6 col-6 ">
                                            <div class="products-three-single w-100  mt-30">
                                                <div class="products-three-single-img"> <a
                                                        href="shop-details-3.html" class="d-block"> <img
                                                            src="assets/images/products/lait1.png"
                                                            class="first-img" alt="" /> <img
                                                            src="assets/images/products/lait1.png"
                                                            alt="" class="hover-img" />
                                                    </a>
                                                    <a href="cart.html" class="addcart btn--primary style2"> Перейти
                                                        к товару </a>
                                                </div>

                                                <div class="products-three-single-content text-center">
                                                    <span>Кровать односпальная</span>
                                                    <h5><a href="shop-details-3.html"> Лайт </a></h5>
                                                    <p>от 790 BYN</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-6 ">
                                            <div class="products-three-single w-100  mt-30">
                                                <div class="products-three-single-img"> <a
                                                        href="shop-details-3.html" class="d-block"> <img
                                                            src="assets/images/products/paul1.png"
                                                            class="first-img" alt="" /> <img
                                                            src="assets/images/products/paul1.png"
                                                            alt="" class="hover-img" />
                                                    </a>
                                                    <a href="{{ route('productCard') }}" class="addcart btn--primary style2"> Перейти
                                                        к товару </a>
                                                </div>

                                                <div class="products-three-single-content text-center">
                                                    <span>Кровать односпальная</span>
                                                    <h5><a href="shop-details-3.html"> Паул </a></h5>
                                                    <p>от 910 BYN</p>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End product-grid-->
    
@endsection
