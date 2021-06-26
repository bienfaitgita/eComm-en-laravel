@extends('master')
@section("content")

<div class="container custom-product">


      <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>

              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>

              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>

              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>

              </tr>
            </tbody>
          </table>
          <div>
            <form action="/index" method="POST">
                @csrf
                <div class="form-group">

                  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Methode : </label><br>
                  <input type="radio" value="cash" name="payment"><span> Online payment </span><br><br>
                  <input type="radio" value="cash" name="payment"><span> EMI payment </span><br><br>
                  <input type="radio" value="cash" name="payment"><span> Payment on Delivery </span><br><br>
                </div>

                <button type="submit" class="btn btn-success">Passez a la caisse</button><br><br>
              </form>
          </div>

      </div>
</div>

@endsection
