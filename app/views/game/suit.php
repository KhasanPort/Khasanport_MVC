<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Game Suwit Jawa</title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL;?>/css/suit.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/tailwind-all.css">
</head>
<body>

    <div class="container">
        <div class="w-full relative flex flex-wrap gap-10">
            <div class="mode absolute right-0">
                
            </div>
            <div class="computer w-full h-max relative">
                <img src="" alt="">
                <div class="hasil absolute bottom-0 m-auto">

                </div>
            </div>
            <div class="w-full flex justify-around items-center gap-5 p-4">
                <img src="<?= BASEURL; ?>/img/gajah.png" class="w-1/3 p-4" alt="gajah">
                <img src="<?= BASEURL; ?>/img/orang.png" class="w-1/3 p-4" alt="orang">
                <img src="<?= BASEURL; ?>/img/semut.png" class="w-1/3 p-4" alt="semut">
            </div>
        </div>
    </div>
	<!-- <div class="container">
		<h1 class="header">SUWIT JAWA V2.0</h1>
		<div class="bgAtas">
			<div class="animasi"></div>
			<div class="kotak">
				<div class="point">
					<div class="computer"></div>
					<p>       :      </p>
					<div class="player"></div>
				</div>
				<img src="Gambar/Home.jfif" id="jumbo">
			</div>	
		</div>
		<h1 class="info"></h1>
		<div class="pilihan">
			<img alt="Gambar Rusak" src="<?= BASEURL;?>/img/gajah.png" class="gajah" id="jempol">
			<img alt="Gambar Rusak" src="<?= BASEURL;?>/img/orang.png" class="orang" id="telunjuk">
			<img alt="Gambar Rusak" src="<?= BASEURL;?>/img/semut.png" class="semut" id="kelingking">
		</div>	
	</div> -->

<script type="text/javascript" src="<?= BASEURL;?>/js/suit.js"></script>
</body>
</html>