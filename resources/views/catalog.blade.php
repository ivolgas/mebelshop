@extends('layouts.app')

@section('content')

    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/shop/bg2.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-content text-center wow fadeInUp animated">
                        <h2>Каталог</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style2-->
    <!-- categories-one Start -->
    <section class="categories-one mt-60 position-relative">
        <div class="container pt-60 pb-60 ">
            <div class="row justify-content-lg-between justify-content-center align-items-center">

                <div class="col-lg-12 mt--30 mb-120">

                    <div class="section-title categories-one__sec-title text-lg-start text-center ">                                
                        <h3 class="title wow fadeInUp mb-30">Выберите категорию кроватей</h3>                                
                    </div>

                    <div class="row justify-content-center">
                        @foreach ($categories as $category)

                        <div class="col-sm-4 mt-30 col-8 text-center ">
                            <div class="categories-one__thumb wow fadeInLeft animated"> <img
                                    src="assets/images/categories/single.png" alt="">
                                <div class="text">
                                    <h2><a href="{{ route('products') }}">{{ $category->name }}</a></h2>
                                </div>
                            </div>
                        </div>
                            
                        @endforeach
                        
                        {{-- <div class="col-sm-4 mt-30 col-8 text-center ">
                            <div class="categories-one__thumb wow fadeInRight animated"> <img
                                    src="assets/images/categories/half.png" alt="">
                                <div class="text">
                                    <h2><a href="shop-grid.html">Полуторные</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-30 col-8 text-center ">
                            <div class="categories-one__thumb wow fadeInRight animated"> <img
                                    src="assets/images/categories/double.png" alt="">
                                <div class="text">
                                    <h2><a href="shop-grid.html">Двуспальные</a></h2>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories-one End -->
    
@endsection
