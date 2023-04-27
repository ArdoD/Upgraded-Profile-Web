<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Device</title>
    <link rel="stylesheet" href="css/device.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/js/app.js'])
</head>
<body >
    <div class="background-container">
        <div class="text-container">
            <div class="title-text">
                <h3><b>My Device</b></h3>
                <p>This page contains all the devices that I own and that I use to carry out my daily activities. All of these devices also play a very important role in my self-development in information technology.</p>
            </div>
        </div>
        <div class="container">
            @foreach ($product as $prod )
                @if ($prod['rating'] == "Earbuds")
                    <a href="description/{{$prod['id']}}" class="product-card-rare">
                        <div class="product-body">
                            <h5 class="Device Name">{{ $prod['name'] }}</h5>
                            <p class="Device Type">{{ $prod['rating'] }}</p>
                            <p class="Device Price">{{ $prod['price'] }}</p>
                        </div>
                    </a>
                @elseif ($prod['rating'] == "Smartphone")
                    <a href="description/{{$prod['id']}}" class="product-card-srare">
                        <div class="product-body">
                            <h5 class="Device Name">{{ $prod['name'] }}</h5>
                            <p class="Device Type">{{ $prod['rating'] }}</p>
                            <p class="Device Price">{{ $prod['price'] }}</p>
                        </div>
                    </a>
                @else
                    <a href="description/{{$prod['id']}}" class="product-card-ssrare">
                        <div class="product-body">
                            <h5 class="Device Name">{{ $prod['name'] }}</h5>
                            <p class="Device Type">{{ $prod['rating'] }}</p>
                            <p class="Device Price">{{ $prod['price'] }}</p>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
        <div class="button-container">
                <a href="/">
                <div class="button back-button">
                    <p>Back to Home</p>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
