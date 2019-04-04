<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="{{asset('metromini/docs/metro/css/metro-all.css?ver=@@b-version') }}" rel="stylesheet">
	<link id="color-scheme" href="{{asset('metromini/docs/metro/css/schemes/red-alert.css') }}" rel="stylesheet">
	<link href="{{asset('metromini/docs/metro/css/third-party/datatables.css?ver=@@b-version') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/master.css') }}">
	<title>Point Of Sale | SMK Negeri 10 Jakarta</title>
</head>
<body>
	<div class="example" style="height: 800px">
		<div data-role="navview" data-compact="md" data-expanded="lg" data-toggle="#pane-toggle">
			<nav class="navview-pane">
				@php
					$url = basename($_SERVER['REQUEST_URI']);
					$links = str_replace("/".$url, '', $_SERVER['REQUEST_URI']);
					$link = str_replace("/", '', $links);
				@endphp
				<ul class="navview-menu">
					<li>
						@if($link == "master")
						<a href="{{ route('mainmenu') }}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Master</b></span>
						</a>
						@elseif($link == "inventoryproduk" || $link == "inventoryconfig")
						<a href="{{ route('inventory.index') }}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Inventory</b></span>
						</a>
						@elseif($link == "pos")
						<a href="{{ route('mainmenu') }}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Point Of Sale</b></span>
						</a>
						@elseif($link == "laporan")
						<a href="{{ route('mainmenu') }}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Laporan</b></span>
						</a>
						@endif
					</li>
					<li class="item-separator"></li>
					@if($link == "master")
					<li>
						<a href="{{ route('toko.all') }}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Informasi Toko</span>
						</a>
					</li>
					<li class="active">
						<a href="{{ route('user.all') }}">
							<span class="icon"><span class="mif-users"></span></span>
							<span class="caption">Daftar User</span>
						</a>
					</li>
					@elseif($link == "inventoryproduk")
					<li>
						<a href="{{ route('produk.all') }}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Produk Tersedia</span>
						</a>
					</li>
					<li>
						<a href="{{ route('produk.habis') }}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Produk Habis</span>
						</a>
					</li>
					@elseif($link == "inventoryconfig")
					<li>
						<a href="{{ route('kategori.all') }}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Kateogori</span>
						</a>
					</li>
					<li>
						<a href="{{ route('unit.all') }}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Unit</span>
						</a>
					</li>
					<li>
						<a href="{{ route('bahan.all') }}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Bahan</span>
						</a>
					</li>
					@elseif($link == "pos")
					<li>
						<a href="{{ route('pos.paymentsementara-index') }}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Pembayaran</span>
						</a>
					</li>
					<li>
						<a href="{{ route('pos.index') }}">
							<span class="icon"><span class="mif-home"></span></span>
							<span class="caption">Riwayat Pembayaran</span>
						</a>
					</li>
					@elseif($link == "laporan")
					<li>
						<a href="{{ route('barangmasuk.all') }}">
							<span class="icon"><span class="mif-backward"></span></span>
							<span class="caption">Barang Masuk</span>
						</a>
					</li>
					<li>
						<a href="{{ route('barangkeluar.all') }}">
							<span class="icon"><span class="mif-forward"></span></span>
							<span class="caption">Barang Keluar</span>
						</a>
					</li>
					@endif
				</ul>
			</nav>

			<div class="navview-content pl-10-md pr-10-md">
				@yield('content')
			</div>
		</div>
	</div>

	<script src="{{asset('metromini/docs/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{asset('metromini/docs/metro/js/metro.js') }}"></script>
	<script>
		$("input[name=r3]").on("click", function(){
			var checked = $(this).is(":checked");
			if (checked) {
				$("#listview-1").data("listview").view(this.value);
			}
		});
	</script>
	<!-- ads-script -->
</body>
</html>
