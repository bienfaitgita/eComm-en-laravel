@extends('master')

@section('extra-scipt')
<script src="https://js.stripe.com/v3/"></script>

@section("content")

<div class="container custom-product">

      <div class="col-sm-10">
        <h2>Page de paiement</h2>
          <div>
                <div class="row">
                    <div class="col-md-6"> <br>
                        <form action="#" class="my-4" >
                            <div id="card-element">
                              <!-- Elements will create input elements here -->
                            </div>

                            <!-- We'll put the error messages in this element -->
                            <div id="card-errors" role="alert"></div><br>

                            <button class="btn btn-success mt-4" id="submit">Procéder au paiement</button> <br><br>
                        </form>
                    </div>
                </div>


          </div>

      </div>
</div>

@endsection

@section('extra-js')
<script>
    var stripe = Stripe('pk_test_51J6TrjFhR5U44roiFWwYyEYdu7nSW2DiTL81pOgGVfsR4HA28vbKpc4Ly09BWqvqiKNQ19mq3GW6KtdQ6YcuBK2g00duMA7CNC');
    var elements = stripe.elements();


    var style = {
    base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize:"16px",
        "::placeholder":{
            color: "#aab7c4"
        }
    },
    invalid:{
        color:"#fa755a",
        iconColor: "#fa755a"
    }
    };

    var card = elements.create("card", { style: style });
    card.mount("#card-element");

    card.on('change', ({error}) => {
    let displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('alert-warning');
            displayError.textContent = error.message;
        } else {
            displayError.classList.remove('alert-warning');
            displayError.textContent = '';
        }
    });

    var form = document.getElementById('payment-form');

form.addEventListener('submit', function(ev) {

  ev.preventDefault();
  // If the client secret was rendered server-side as a data-secret attribute
  // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
  stripe.confirmCardPayment({{$clientSecret}}, {
    payment_method: {
      card: card

    }
  }).then(function(result) {
    if (result.error) {
      // Show error to your customer (e.g., insufficient funds)
      console.log(result.error.message);
    } else {
      // The payment has been processed!
      if (result.paymentIntent.status === 'succeeded') {
        // Show a success message to your customer
        // There's a risk of the customer closing the window before callback
        // execution. Set up a webhook or plugin to listen for the
        // payment_intent.succeeded event that handles any business critical
        // post-payment actions.
        console.log(result.paymentIntent);
      }
    }
  });
});
</script>
@endsection
