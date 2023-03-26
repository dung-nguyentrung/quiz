<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web trắc nghiệm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animation.css">
    <link rel="stylesheet" href="assets/css/colorvariants/default.css" id="defaultscheme">
    <link rel="stylesheet" href="colorswitcher/assets/css/colorswitcher.css">
    @livewireStyles
</head>

<body class="popreveal">
    <main class="overflow-hidden">
        {{ $slot }}
        <div class="image-f d-none">
            <img src="assets/images/image-f.png" alt="image">
        </div>
    </main>


    <div id="error">

    </div>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/callswitcher.js"></script>
    @livewireScripts
</body>

</html>