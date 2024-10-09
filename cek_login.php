<?php
header("Content-Type: text/vnd.turbo-stream.html");

$valid_username = "admin";
$valid_password = "admin";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    header("Location: ./?p=dashboard");
} else {
    echo "<turbo-stream action='replace' target='result'>
    <template>
        <script>
            alert('Gagal Login. Username atau password salah.');
        </script>
    </template>
  </turbo-stream>";
}

?>
