@extends('master')
@section("content")

<div class="container custom-product">


      <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>

            @foreach ($orders as $item)

            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" >
                        <div class="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">

                        <div class="">
                        <h4>Name : {{$item->name}}</h4>
                        <h6>Delivery Status : {{$item->status}}</h6>
                        <h6>Address : {{$item->address}}</h6>
                        <h6>Payment Status : {{$item->payment_status}}</h6>
                        <h6>Payement method : {{$item->payment_method}}</h6>
            
                        </div>

                </div>


            </div>

          @endforeach

          </div>
      </div>
</div>

@endsection
