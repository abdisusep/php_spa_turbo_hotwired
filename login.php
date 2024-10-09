<h1>Login</h1>
<hr>

<form action="cek_login.php" method="POST" data-turbo-frame="result">
    <label for="name">Username :</label>
    <input type="text" id="username" name="username" placeholder="Username" required>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<div id="result" data-turbo-frame="result"></div>
