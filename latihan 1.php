<?php

$produk = [
    [
        "No" => "1",
        "Nama Produk" => "Sepatu Nike Black Edition",
        "Harga" => 5000000,
        "Foto" => "pertamina.png",
        "Stok" => 50,
        "Status" => "Tersedia"
    ],
    [
        "No" => "2",
        "Nama Produk" => "Sepatu Adidas White Edition",
        "Harga" => 6000000,
        "Foto" => "pertamina.png",
        "Stok" => 0,
        "Status" => "Tidak tersedia"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kemuning Store | Sepatu Murah Dan Terpercaya</h1>
    <h2>Data Produk</h2>
    <table border="1" cellpadding="7" cellpacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>Status</th>
        </tr>
        <tr>
        <?php foreach($produk as $a) : ?>
            <td><?= $a["No"]; ?></td>
            <td><?= $a["Nama Produk"]; ?></td>
            <td>Rp.<?= number_format($a["Harga"]) ?></td>
            <td><img src="<?= $a["Foto"]; ?>" alt=""width= "80px"></td>
            <td><?= $a["Stok"]; ?></td>
            <?php if($a["Status"] == "Tersedia"){?>
                <td style ="color : green;"><?= $a["Status"]?></td>
            <?php } else { ?>
                <td style = "color : red;"><?= $a["Status"]?></td>
            <?php } ?>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>