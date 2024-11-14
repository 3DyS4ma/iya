<div class="logout">
    <h1>Apakah anda yakin untuk logout?</h1>
    <form action="" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</div>

<?php
    if (isset($_POST['logout'])){
        session_destroy();
        header('location:index.php');
    }