<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    {{ $data }}
    <div class="wrapper" style="background-color: #ffffff">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="color: #000000">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/images/wikusama.png" alt="Wikusama" height="30px" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-black" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active mr-2">
                            <a class="nav-link" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">OUR ROOM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="cover" style="background-image: url(images/hotel.jpg); background-size: cover; background-position: center; padding: 200px 0 200px 0;">
            <div class="container text-left" style="font-weight: bold;color: #ffffff;">
                <h1 style="font-size: auto;">Wikusama Hotels</h1>
                <p>We are focused on providing clients with the highest level <br> of comfort and excellent affordable rates</p>
                <button class="btn btn-warning btn-fill btn-large">Book Now</button>
            </div>
        </section>
        <div class="welcome" style="text-align: center; padding: 50px 0 50px 0">
            <h6 style="color: #ffd700">WELCOME TO WIKUSAMA HOTEL</h6>
            <h2 style="margin-bottom: 2em">You'll Never Want To Leave</h2>
            <div class="row">
                <div class="col-lg-3">
                    <img src="/images/pool.png" alt="">
                    <p style="margin-top: 2rem">Swimming Pool</p>
                </div>
                <div class="col-lg-3">
                    <img src="/images/customer.png" alt="">
                    <p style="margin-top: 2rem">Friendly Service</p>
                </div>
                <div class="col-lg-3">
                    <img src="/images/food.png" alt="">
                    <p style="margin-top: 2rem">Get Breakfast</p>
                </div>
                <div class="col-lg-3">
                    <img src="/images/bed.png" alt="">
                    <p style="margin-top: 2rem">Cozy Rooms</p>
                </div>
            </div>
        </div>
        <div class="type">
            <div class="container m-auto d-flex flex-wrap align-items-stretch justify-content-around justify-content-sm-around">
                @foreach ($data as $data)
                    <div class="card" style="width: 350px;">
                        <img src="/hotels/{{ $data->photo }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title center">{{ $data->type_name }}</h5>
                            <p class="card-text">Rp. {{ $data->price }}</p>
                            <p>{{ $data->desc }}</p>
                            <a href="#" class="btn btn-primary">Booking Now</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>