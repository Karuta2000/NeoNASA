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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/256/1534/1534067.png">
    <title>NeoNASA</title>

    <style>
        .bg-space {
            background-color: #310047 !important;
        }

        .btn-space {
            background-color: #310047 !important;
            color: white;
        }

        .btn-space:hover {
            color: white;
            background-color: #4f0f6d !important;
        }

        .btn-space:active {
            color: white;
            background-color: #4f0f6d !important;
        }
    </style>
</head>

<body class="bg-space bg-gradient">
    <div class="py-0"
        style="background-image: url('https://images2.alphacoders.com/521/521477.jpg'); background-attachment: fixed;">
        <div style="background-color: rgba(49, 0, 71, 0.5);">
            <x-navbar />
            <div class="container bg-gradient px-5 py-5 shadow-lg" style="min-height: 90vh; background-color: rgba(255, 255, 255, 0.5);">
                @yield('content')
            </div>
            <x-footer />
        </div>

    </div>

</body>

</html>
