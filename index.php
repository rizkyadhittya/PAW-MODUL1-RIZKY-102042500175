<?php
$produk = [
    ["Laptop ASUS","Laptop",7500000,5],
    ["Mouse Logitech","Aksesoris",350000,10],
    ["Keyboard","Aksesoris",850000,0],
    ["Monitor Samsung","Monitor",2500000,3],
    ["Headset","Audio",1200000,7],
    ["Webcam","Kamera",900000,2]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cia Store</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #eee;
        }

        header, footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
        }

        .produk {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        .harga {
            font-weight: bold;
            font-size: 18px;
        }

        .tersedia {
            color: green;
        }

        .habis {
            color: red;
        }

        button {
            background: #222;
            color: white;
            padding: 8px 12px;
            border: 0;
            border-radius: 5px;
        }

        @media(max-width:700px) {
            .produk {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>Cia Store</h1>
    <p>Katalog Produk</p>
</header>

<div class="container">
    <h2>Produk Kami</h2>
    <p>Jumlah Produk: <?= count($produk) ?></p>

    <div class="produk">

    <?php foreach($produk as $p): ?>
        <div class="card">
            <h3><?= $p[0] ?></h3>
            <p>Kategori: <?= $p[1] ?></p>

            <?php if($p[2] >= 1000000): ?>
                <?php $harga = $p[2] * 0.9; ?>
                <p>Harga: <s>Rp<?= number_format($p[2],0,',','.') ?></s></p>
                <p>Diskon 10%</p>
                <p class="harga">
                    Rp<?= number_format($harga,0,',','.') ?>
                </p>
            <?php else: ?>
                <p class="harga">
                    Rp<?= number_format($p[2],0,',','.') ?>
                </p>
            <?php endif; ?>

            <p>Stok: <?= $p[3] ?></p>

            <?php if($p[3] > 0): ?>
                <p class="tersedia">Tersedia</p>
                <button>Beli Sekarang</button>
            <?php else: ?>
                <p class="habis">Stok Habis</p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    </div>
</div>

<footer>
    Cia Store &copy; 2026
</footer>

</body>
</html>
