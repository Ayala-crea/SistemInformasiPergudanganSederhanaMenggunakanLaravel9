<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="shortcut icon" href= type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="navbar">
        @include('layouts.utama.header')
        </div>
        @yield('contents')
    </div>

    <script>
        var menuList = document.getElementById("menuList");

        menuList.style.maxHeight = "0px";

        function togglemenu() {

            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "130px"
            } else {
                menuList.style.maxHeight = "0px"
            }
        }
    </script>
</body>

</html>
