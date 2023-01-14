<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <section class="cover" style="background-image: url(images/hotel.jpg); background-size: cover; background-position: center; padding: 225px 0 225px 0;">
        <div class="container text-center">
            <h3 style="color: #ffffff; margin-bottom: 2em">Welcome to Wikusama Hotels</h3>
            <div class="card container" style="width: 18rem;">
                <div class="card-body">
                    {{-- {{ Form::label('description', 'Deskripsi', ['class' => 'col-2 col-form-label']) }} --}}
                    <div class="form-group mb-4">
                        {{-- <label for="email">Email</label> --}}
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group mb-4">
                        {{-- <label for="password">Password</label> --}}
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <a href="#" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>