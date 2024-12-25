<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form dengan nama field yang sesuai
    $idUser = isset($_POST['id_user']) ? $_POST['id_user'] : null;
    $isi1 = isset($_POST['isi_1']) ? $_POST['isi_1'] : null;
    $isi2 = isset($_POST['isi_2']) ? $_POST['isi_2'] : null;
    $isi3 = isset($_POST['isi_3']) ? $_POST['isi_3'] : null;
    $isi4 = isset($_POST['isi_4']) ? $_POST['isi_4'] : null;
    $isi5 = isset($_POST['isi_5']) ? $_POST['isi_5'] : null;
    $minuman = isset($_POST['minuman']) ? $_POST['minuman'] : null;
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : null;
    $harga = isset($_POST['harga']) ? $_POST['harga'] : null;
    $dp = isset($_POST['dp']) ? $_POST['dp'] : null;

    // Validasi data
    if ($idUser && $isi1 && $isi2 && $isi3 && $isi4 && $isi5 && $minuman && $jumlah && $harga && $dp) {
        // Simpan data sementara di session
        session_start();
        $_SESSION['order_data'] = [
            'id_user' => $idUser,
            'isi1' => $isi1,
            'isi2' => $isi2,
            'isi3' => $isi3,
            'isi4' => $isi4,
            'isi5' => $isi5,
            'minuman' => $minuman,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'dp' => $dp
        ];

        // Arahkan ke halaman pengisian alamat
        header("Location: alamat_penerima.php");
        exit();
    } else {
        echo "Semua data wajib diisi. Silakan periksa kembali form Anda.";
    }
}
?>