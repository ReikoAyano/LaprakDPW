<?php
$judul = "Hololive Sederhana";
$deskripsi = "Hololive adalah agensi VTuber yang menaungi banyak talent virtual dari seluruh dunia.";
$fitur = [
    "Live streaming interaktif",
    "Konten original dan cover lagu",
    "Kolaborasi antar talent"
];
$info = "Hololive merupakan agensi VTuber yang sangat populer dengan jutaan penggemar.";
$info_edit = strtoupper($info);
$tanggal = date("l, d F Y");
$fakta = "Fakta Tambahan";
$coba = "Tonton Hololive Sekarang";
$kunjungi = "Kunjungi situs resmi Hololive:";
$tgl = "Tanggal Hari Ini:";
$panjang = "Panjang Deskripsi:";
$hololive = "Hololive";
$talents = ["Hoshimachi Suisei", "Kobo Kanaeru", "Pavolia Reine", "Ouro Kronii", "Hiodoshi Ao"];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <div>
        <h1><?php echo $hololive; ?></h1>
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Hololive_Production_logo.svg" alt="Logo Hololive" width="150">
        
        <p><?php echo $deskripsi; ?></p>
        <p><strong><?php echo $tgl; ?></strong> <?php echo $tanggal; ?></p>
        <p><strong><?php echo $panjang; ?></strong> <?php echo strlen($deskripsi); ?> karakter</p>
        
        <h2>Fitur <?php echo $hololive; ?></h2>
        <ul>
            <?php
            foreach ($fitur as $fit) {
                echo "<li>" . $fit . "</li>";
            }
            ?>
        </ul>

        <h2>Talent Populer</h2>
        <ul>
            <?php
            foreach ($talents as $talent) {
                echo "<li>" . $talent . "</li>";
            }
            ?>
        </ul>

        <h2><?php echo $fakta; ?></h2>
        <p><?php echo substr($info_edit, 0, 50); ?>...</p>

        <h2><?php echo $coba; ?></h2>
        <p><?php echo $kunjungi; ?></p>
        <a href="https://www.hololive.tv" target="_blank"><?php echo $hololive; ?></a>
    </div>
</body>
</html>
