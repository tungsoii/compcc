<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $title ?></title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <h2 class="logo"><a href="index.php">University of Greenwich</a></h2>
            <input type="checkbox" id="menu-toggle" />
        <label for="menu-toggle" id="hamburger-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </label>
                
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="questions.php">All Posts</a></li>
                    <li><a href="createquestion.php">Create Post</a></li>
                    <li><a href="modules.php">Module</a></li>
                    <li><a href="../mail/contact.php">Contact Us</a></li>
                </ul>
                <div class="buttons">
                    <a href="Login.html.php" class="login">Login</a>
                    <a href="register.html.php" class="register">Register</a>
                </div>
        </nav>
    </header>

    <main>
        <?= $output ?>
    </main>
    <footer>&copy; Tung 2024</footer>
</body>

</html>