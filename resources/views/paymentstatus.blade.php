<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative Logo Desgin Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
    <section>

        <div class="container">
            
            <h2>PAYMENT RECEIVED FOR THE ORDER : {{ $data['ORDERID'] }}</h2>
            <p>Details Below :</p>
            <hr>

            <p>Order Number :  {{ $data['ORDERID'] }}</p>
            <p>Stripe ID  :  {{ $data['stripeCustomerID'] }}</p>
            <p>Stripe PAYMENT ID   :  {{ $data['stripePaymentID'] }}</p>
            <p>Stripe INVOICE URL   :  {{ $data['stripeInvoiceLink'] }}</p>
            <p>ORDER STATUS UPDATED    :  {{ $data['orderStatus'] }}</p>
            <p>ORDER PAYMENT STATUS UPDATED    :  {{ $data['orderPaymentStatus'] }}</p>
           
        
        </div>
    </section>
    
</body>

</html>