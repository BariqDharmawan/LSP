<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="metromini/docs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="metromini/docs/favicon.ico" type="image/x-icon">
    <link href="metromini/docs/metro/css/metro-all.css?ver=@@b-version" rel="stylesheet">
    <link href="metromini/docs/start/start.css" rel="stylesheet">
    <title>Point Of Sale | SMK Negeri 10 Jakarta</title>
    <style type="text/css">
    .a-color{
        background-color: #27AE70;
    }
</style>
</head>
<body class="a-color fg-white h-vh-100 m4-cloak">

    <div class="container-fluid start-screen h-100">
        <h1 class="start-screen-title"><a href="{{ route('mainmenu') }}" style="color: #efefef;"><span class="mif-arrow-left icon"></span></a>&nbsp;Inventory</h1>

        <div class="container tiles-area clear">
            <div class="tiles-grid tiles-group size-2 fg-white">
                <div data-role="tile" data-size="wide" data-effect="animate-slide-left">
                    <a href="{{ route('kategori.all') }}" data-role="tile" class="slide bg-indigo fg-white">
                        <div data-role="tile" class="bg-cyan fg-white" data-size="wide">
                            <span class="mif-table icon"></span>
                            <span class="branding-bar">Master Konfigurasi</span>
                            <span class="badge-bottom">30</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tiles-grid tiles-group size-2 fg-white">
                @if(Auth::user()->akses == "Admin Utama" || Auth::user()->akses == "Kasir")
                <div data-role="tile" data-size="wide" data-effect="animate-slide-left">
                    <a href="{{ route('produk.all') }}" data-role="tile" class="slide bg-indigo fg-white">
                        <div data-role="tile" class="bg-red fg-white" data-size="wide">
                            <span class="mif-pencil icon"></span>
                            <span class="branding-bar">Master Produk</span>
                            <span class="badge-bottom">30</span>
                        </div>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>


    <script src="metromini/docs/js/jquery-3.3.1.min.js"></script>
    <script src="metromini/docs/metro/js/metro.js"></script>
    <script src="metromini/docs/start/start.js"></script>

</body>
</html>
