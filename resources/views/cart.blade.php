@extends('layouts.app')

@section('content')

    <!--Start Breadcrumb Style2-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('assets/images/shop/bg1.png') }});">
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

        @if (!session('cart'))

            <h4 style="text-align: center">Ваша корзина пуста!</h4>
            
        @endif
        

        @if (session('cart'))


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
                                                                        
                                        @foreach (session('cart') as $id => $details) 

                                            <tr rowId="{{ $id }}">
                                                <td data-th="Product">
                                                    <div class="thumb-box"> 
                                                        <img class="thumb" src="{{ asset('assets/images/product-cards') }}/{{ $details['image'] }}" alt="">                                                        
                                                        <h5 style="padding-left: 30px"> {{ $details['name'] }} </h5>
                                                    </div>
                                                </td>
                                                <td data-th="Price"> от {{ $details['price'] }} BYN </td>
                                                <td class="qty">
                                                    <div class="qtySelector text-center"> <span class="decreaseQty"><i
                                                                class="flaticon-minus"></i> </span> <input type="text"
                                                            class="qtyValue" value="1" /> <span class="increaseQty"> <i
                                                                class="flaticon-plus"></i> </span> </div>
                                                </td>
                                                <td data-th="Subtotal" class="sub-total"> от 1780 BYN</td>
                                                <td class="actions">
                                                    {{-- <div class="remove"> --}}
                                                        <a class="btn delete-product"><i class="flaticon-cross"></i></a>
                                                    {{-- </div> --}}
                                                </td>
                                            </tr>
                                        
                                         @endforeach                                        
                                                                        
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

                                        
        @endif


            <!-- newsLetter_popup Start -->

            {{-- <button data-mfp-src="#newsLetter-popup" class="modal-btn d-none"></button> --}}
            <div id="newsLetter-popup" class="mfp-hide p-4" role="dialog" style="max-width: 600px;">
                <div class="row align-items-center justify-content-sm-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 wow fadeInUp animated">
                        <div class="newsLetter-popup__content mb-4 p-0">
                            <div class="text-center">
                                <a href="{{ route('aboutUs') }}" class="logo">
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

@section('scripts')
<script type="text/javascript">

    $(".delete-product").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('delete.cart.product') }}',
            method: "DELETE",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("rowId")
            },
            success: function (response) {
                window.location.reload();
            }
        });
        
    });

</script>
@endsection