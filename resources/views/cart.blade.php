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

        @if (!session('cart'))

            <h4 style="text-align: center">Ваша корзина пуста!</h4>
            
        @endif
        

        @if (session('cart'))


        <div class="container" style="width: 80%;">
            <div class="row wow fadeInUp animated">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="cart-table-box">
                        <div class="table-outer d-flex justify-content-center">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th>Товар</th>
                                        <th>Кровать</th>
                                        <th class="price">Стоимость</th> 
                                        <th>Примечание</th>                     
                                        <th class="hide-me"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        
                                        @foreach (session('cart') as $id => $details) 
                                           
                                            <tr rowId="{{ $id }}">
                                                <td data-th="Product">
                                                    <div class="thumb-box"> 
                                                        <img class="thumb" src="{{ asset('assets/images/product-cards') }}/{{ $details['image'] }}" alt="">  
                                                    </div>
                                                </td>
                                                <td><h5 > Модель {{ $details['name'] }} </h5></td>
                                                <td data-th="Price"> от {{ $details['price'] }} BYN </td>
                                                <td><span>после оформления заказа наш <br>консультант свяжется с вами<br> в рабочие часы
                                                    для уточнения <br>деталей заказа</span>
                                                </td>                                                
                                                <td class="actions">
                                                    <a class="btn delete-product"><i class="flaticon-cross"></i></a>
                                                </td>                                                
                                            </tr>
                                        
                                         @endforeach                                        
                                                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row wow fadeInUp animated d-flex justify-content-center" style="padding: 0 12px">                
                <div class="login-register-form p-0 mt-30">
                    <p class="mb-4">Для получения обратной связи при оформлении заказа введите:</p>
                    <div class="row d-flex">
                        <div class="form-group mb-4"> 
                            <input type="text" class="form-control" style="width: 40%" placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 40%" placeholder="Номер телефона">
                        </div>
                    </div>
                    <p class="pt-30">* Нажимая кнопку "Заказать", Вы даёте согласие на обработку персональных данных</p>                                               
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

        </div> 
                                       
        @endif          
        

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