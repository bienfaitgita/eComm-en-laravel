@extends('master')
@section("content")

<div class="container custom-product">


      <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Search Result</h4>
            @foreach ($products as $item)

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
                        <h4>{{$item->name}}</h4>
                        <h6>{{$item->dercription}}</h6>
                        </div>

                </div>
                <div class="col-sm-3">
                    <button class="btn btn-warning">Remove to cart</button>
                </div>

            </div>

          @endforeach

          </div>
      </div>
</div>

@endsection
