<!DOCTYPE html>
<html lang="en">


<head>
    <!-- BOOTSTRAP  -->
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
</head>

<body>

    @include('partials.header')
    <div class="container">

        <div class="row row-cols-4">

            @foreach ($movies as $movie)
                <div class="col p-1">
                    <div class="card mb-3">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <h5 class="card-title"> {{ $movie['title'] }}</h5>
                            <p class="card-text">{{ $movie['date']}} {{ $movie['nationality'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>