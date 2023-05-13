<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/3919/3919942.png">
    <title>NeoNASA</title>
</head>

<body class="bg-dark bg-gradient">
    <div class="py-0" style="background-image: url('https://wallpapers.com/images/featured/lt47o5qub95qmqkx.jpg');">
        <x-navbar />
        <div class="container bg-light py-5 shadow-lg" style="min-height: 90vh;">
            <div class="card shadow rounded p-0">

                @yield('content')
            </div>
        </div>
        <x-footer />
    </div>

</body>

</html>
