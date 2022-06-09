<?php 
// koneksi ke database
function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL');

    return $conn;
}


function query($query) {
    $conn = koneksi();
    
    $result = mysqli_query($conn, $query);
    
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row; 
    }
    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    // jika user tidak memilih gambar
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = 'img.png'; 
    } else {
    // jalankan fungsi upload gambar
        $gambar = upload();
    // cek jika upload gagal
    if (!$gambar) {
        return false;
        }
    }
    
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $isbn = htmlspecialchars($data['isbn']);
    //$gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO buku VALUES (null, '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$isbn', '$gambar')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    
    $buku = query("SELECT * FROM buku WHERE id = $id") [0];

    if ($buku["gambar"] !== 'img.png') {
        unlink('img/' . $buku["gambar"]);
    } 

    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {

    $conn = koneksi();

    $id = $data["id"];
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $isbn = htmlspecialchars($data['isbn']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE buku SET 
        judul = '$judul', 
        penulis = '$penulis', 
        penerbit = '$penerbit',
        tahun_terbit = '$tahun_terbit',
        isbn = '$isbn',
        gambar = '$gambar' 
        WHERE id = $id "; 

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload() {
    // siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file bukan file yang di upload bukan gambar
    if (!in_array($filetype, $allowedtype)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
             </script>"; 
        return false;
    }

    // cek apakah gambar terlalu besar
    if ($filesize > 1000000) {
        if (!in_array($filetype, $allowedtype)) {
            echo "<script>
                    alert('ukuran gambar terlalu besar!');
                 </script>"; 
            return false;
        }
    }

    // lolos pengecekan, siap untuk upload
    $newsfilename = uniqid(); $filename;
    move_uploaded_file ($filetmpname, 'img/' . $newsfilename);

    return $newsfilename;
}


?>