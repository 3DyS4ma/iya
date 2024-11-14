<div class="register">
    <h1>Register</h1>
    <form action="" method="post">
        <input type="email" name="email" required placeholder="Masukkan email">
        <input type="password" name="password" required placeholder="Masukkan password">
        <input type="submit" name="register" value="Register">
    </form>
</div>

<?php

    if (isset($_POST['register'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO customer (email, password) VALUES ('$email', '$password')";
        mysqli_query($koneksi, $sql);
        header('location:index.php?menu=login');
    }

?>