@extends('master')
@section("content")

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/"> <span><<<<span> Go back </a>
            <h2>{{$product['name']}}</h2>

            <h4>Price : {{$product['price']}} $ </h4>
            <h5>Description : {{$product['dercription']}}</h5>
            <h6>Category : {{$product['category']}}</h6>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>

            <br>
            <button class="btn btn-success">Bay now</button>
            <br><br>
        </div>

    </div>


</div>

@endsection
