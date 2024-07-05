<?php
include "koneksi.php";

// Handle contact form POST
if (isset($_POST['submit'])) {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    $stmt = $koneksi->prepare("INSERT INTO contact_us (first_name, last_name, company_name, email, phone_number, message) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("error preparing statement: " . $koneksi->error);
    }

    $stmt->bind_param("ssssss", $first_name, $last_name, $company, $email, $phone_number, $message);

    if ($stmt->execute()) {
        echo "<script>
        alert('Data berhasil disimpan')
        window.location.replace('contact.php');
        </script>";
    } else {
        echo "<script>
        alert('Data gagal disimpan')
        window.location.replace('contact.php');
        </script>";
    }
}

$koneksi->close();

?>