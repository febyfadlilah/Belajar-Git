
    <?php
    $uang = 9000;
    $harga = 10000;
    echo "Febi : Saya mau beli, uang saya hanya ada Rp.$uang Apa bisa pak ?";
    if ($uang < $harga) {
        $kurang = $harga - $uang;
        echo "<br/>
        Pak Kumis : Mohon maaf uang anda kurang <b> Rp.$kurang</b>!";
    } 
    else {
        echo "<br/>Pak Kumis : Bisa kokkk!";
    }