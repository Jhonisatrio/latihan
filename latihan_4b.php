<?php
$nama = ["Indonesia","Singapura","malaysia","Brunei","Thailan"];
$nama1 = ["Indonesia","Singapura","malaysia","Brunei","Thailan","Laos","Filipina","Myanmar"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>looping for array</title>
    </head>
    <body>
        <p><font size="5"><strong>Daftar Negara ASEAN awal :</strong></font></p>
        <?php
            foreach ($nama as $absen) {
                echo "<li>$absen</li>";
            }
            
        ?>
    </body>
    <body>
        <p><font size="5"><strong>Daftar Negara ASEAN baru :</Strong></font></p>
        <?php
            foreach ($nama1 as $absen) {
                echo "<li>$absen</li>";
            }
            
        ?>
    </body>
</html>