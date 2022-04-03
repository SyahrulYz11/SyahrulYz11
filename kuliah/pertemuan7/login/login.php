<?php 
// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"])) {
    // cek username dan password
    if( $_POST["username"] == "admin" && $_POST["password"] == "gumelar123" ) {
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

<?php if(isset($error)) : ?>
<p style="color:red; font-style: italic">username / password salah</p>
<?php endif; ?>
<ul>
<form action="" method="post">
    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="">
    </li>
    <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>

</form>
</ul>



</body>
</html>