<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Turbo Hotwired SPA</title>
    <script src="https://unpkg.com/@hotwired/turbo@8.0.10/dist/turbo.es2017-esm.js" type="module"></script>
</head>
<body>
    <nav>
        <ul>
            <li><a href="./" >Home</a></li>
            <li><a href="./about">About</a></li>
            <li><a href="./?p=contact">Contact</a></li>
        </ul>
    </nav>

    <main id="content">
        <?php 
            $page = isset($_GET['p']) ? $_GET['p'] : 'home';
            include "$page.php"; 
        ?>
    </main>
</body>
</html>
