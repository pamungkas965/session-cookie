<?php
//===============================================
// Nama file : session1.php
// Halaman ini merupakan halaman contoh penciptaan session. 
// Perintah session_start() harus ditaruh diperintah pertama
// tanpa spasi di depannya. 
// Perintah session_start() harus ada pada setiap halaman yang 
// berhubungan dengan session
//===============================================

session_start();
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // periksa login
    if ($user == "naren" && $pass == "Fasilkom") {
        // menciptakan session
        $_SESSION['login'] = $user;

        // menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil Login</h1>";
        echo "<h2><a href='session2.php'>Klik di sini (session2.php)</a> 
              untuk menuju ke halaman pemeriksaan session</h2>";
    } else {
        echo "<h1>Login gagal</h1>";
    }
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Silakan Login ...</title>
</head>
<body>
    <form action="" method="post">
        <h2>Silakan Login...</h2>
        Username : <input type="text" name="user"/><br/>
        Password : <input type="password" name="pass"/><br/>
        <input type="submit" name="Login" value="Log In"/>
    </form>
</body>
</html>

<?php
}
?>