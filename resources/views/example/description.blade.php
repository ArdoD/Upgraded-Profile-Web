<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Description</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body style="margin-left: 1vw">
    {{-- @include('layout.header') --}}
    <br>
    <br>
    <div class="container-desc">
        @foreach ($product as $prod)
            @if ($prod['id'] == $id)
            <div class="img-container" style="display:flex;justify-content:space-around">
                <img class="product-img" style="width : 21vw; height : 18vw; margin-bottom: 3vw; margin-left: 1vw; text-align:center" src="{{ asset('img/' . $prod['Image']) }}"
                alt="{{ $prod['name'] }}">
            </div>
            <div class="container" style="border: 1px solid;background-color: #e0ebd4;padding:3vw; border-radius:2vw; ">
                <p style="font-size: 20px;"><b>Name</b> :  {{$prod['name']}}</p>
                <p style="font-size: 20px;"><b>Device Type</b>:  {{$prod['rating']}}</p>
                <p style="font-size: 20px;"><b>Device Price</b> :  {{$prod['price']}}</p>
                <p style="font-size: 20px; text-align:justify;margin-right:4vw"><b>Description</b> :  {{$prod['Description']}}</p>
            </div>
            @endif
        @endforeach
        <div class="back-container" style="margin-top: 3vw; display:flex;justify-content:center;margin-bottom:3vw;">
            <a href="/device" type="button" class="btn btn-outline-success" style="height: 3vw;width:15vw;text-align:center;">Back to my Device</a>
        </div>
    </div>
</body>
</html>
