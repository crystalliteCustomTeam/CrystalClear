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
            
            <p>Client Name:  {{ $data['name'] }}</p>
            <p>Client Email:  {{ $data['email'] }}</p>
            <p>Client phone:  {{ $data['phone'] }}</p>
            <p>Order ID :  {{ $data['ORDID'] }}</p>
            <p>Package Name :  {{ $data['packageName'] }}</p>
            <p>Package Price :  {{ $data['packagePrice'] }}</p>
            <p>Order Status :  {{ $data['orderStatus'] }}</p>
            <p>Payment Link Given By Stripe :  {{ $data['StripePaymentLink'] }}</p>
            <p>Redesign Logo :  {{ $data['reDesign'] }}</p>
            <p>Logo Title :  {{ $data['logoTitle'] }}</p>
            <p>Logo Tagline :  {{ $data['tagline'] }}</p>
            <p>Business Description :  {{ $data['businessDescription'] }}</p>
            <p>Dislikes :  {{ $data['dislikes'] }}</p>
            <p>Existing Websites :  {{ $data['existingWebsites'] }}</p>

            @foreach($data['images'] as $images)
                <p>FIles : {{$images}}</p>
            @endforeach
           
        
        </div>
    </section>
    
</body>

</html>