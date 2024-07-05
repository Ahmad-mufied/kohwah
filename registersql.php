<?php
include "koneksi.php";

// Handle form POST
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $koneksi->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");

    if ($stmt === false) {
        die("error preparing statement: " . $koneksi->error);
    }

    $stmt->bind_param("sss", $email, $username, $password);

//    $query = mysqli_query($koneksi, "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')") or die("data salah: " . mysqli_error($koneksi));

    if ($stmt->execute()) {
        echo "<script>
alert('Data berhasil disimpan')
window.location.replace('login.php');
</script>";
    } else {
        echo "Update Data Gagal: " . $stmt->error;
    }

    $stmt->close();
    echo "<script>
alert('Data berhasil disimpan')
window.location.replace('registerx.php');
</script>";
}
$koneksi->close();

?>