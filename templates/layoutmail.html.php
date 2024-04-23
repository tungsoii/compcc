<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        body {
            height: 100vh;
            width: 100%;
            background: linear-gradient(to bottom left, #2116b8 33%, #3a1ad9 85%);
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin: 0 auto;
            padding: 15px 0;
            overflow: hidden;
            background: #051460;
            position: sticky;
        }

        .navbar .logo a {
            margin: 25px;
            font-size: 1.8rem;
            text-decoration: none;
            color: #fff;
        }

        .navbar .links {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 35px;
        }

        .navbar .links a {
            font-weight: 500;
            text-decoration: none;
            color: #fff;
            padding: 10px 0;
            transition: 0.2s ease;
        }

        .navbar .links a:hover {
            color: #0c0455;
        }

        .navbar .buttons a {
            margin: 25px;
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            padding: 15px 0;
            transition: 0.2s ease;
        }

        .navbar .buttons a:not(:last-child) {
            margin-right: -10px;
        }

        .navbar .buttons .login {
            border: 1px solid #fff;
            padding: 7px 20px;
            border-radius: 0.375rem;
            text-align: center;
            transition: 0.2s ease;
        }

        .navbar .buttons .login:hover {
            background-color: #270983;
            color: #fff;
        }

        .navbar .buttons .register {
            border: 1px solid #fff;
            padding: 7px 20px;
            border-radius: 0.375rem;
            text-align: center;
            transition: 0.2s ease;
        }

        .navbar .buttons .register:hover {
            background-color: #4221d9;
            color: #fff;
        }

        #menu-toggle {
            display: none;
        }

        #hamburger-btn {
            margin: 20px;
            font-size: 0.5rem;
            color: #fff;
            cursor: pointer;
            display: none;
            order: 1;
        }

        @media screen and (max-width: 1023px) {
            .navbar .logo a {
                font-size: 1.5rem;
            }

            .links {
                position: fixed;
                right: -100%;
                top: 75px;
                width: 200px;
                height: 100vh;
                padding-top: 50px;
                background: linear-gradient(to bottom left, #2b25cd 50%, #360fb8 85%);
                flex-direction: column;
                transition: 0.3s ease;
            }

            .navbar #menu-toggle:checked~.links {
                right: 0;
            }

            .navbar #hamburger-btn {
                display: block;
            }

            .header .buttons {
                display: none;
            }
        }

        footer {
            padding: 1em;
            color: #1c0b7d;
            background-color: #fff;
            ;
        }

        form {
            padding: 100px;
            text-align: center;
            margin-right: 130px;
        }

        form .button {
            margin-left: 130px;
        }


        h1 {
            color: #fff;
            margin-left: 130px;
        }

        .label1 {
            font-size: 16;
            color: #fff;
            padding: 50px;
        }

        .label2 {
            font-size: 16;
            color: #fff;
            padding: 37px;
        }

        .contact-input {
            width: 400px;
            height: 30px;
            border: none;
            outline: none;
            padding-left: 25px;
            border-radius: 0.375rem;
        }

        .contact-input2 {
            width: 400px;
            height: 300px;
            border: none;
            outline: none;
            padding-left: 25px;
            border-radius: 0.375rem;
        }

        textarea {
            padding-top: 15px;
        }

        .contact-input:focus,
        .contact-input2:focus {
            border: 2px solid #514386;
        }

        .button {
            display: fixed;
            align-items: center;
            padding: 12px 24px;
            font-size: 16px;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 0.375rem;
            transition: 0.2s ease;
            background: none;
        }

        .button:hover {
            background-color: #9294b5;
            border: 1px solid #fff;
            border-radius: 0.375rem;
        }
    </style>
    <title><?= $title ?></title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <h2 class="logo"><a href="index.php">Page of Tung</a></h2>
            <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" id="hamburger-btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </label>

            <ul class="links">
                <li><a href="../templates/index.php">Home               </a></li>
                <li><a href="../templates/posts.php">All Posts          </a></li>
                <li><a href="../templates/createpost.php">Create Post   </a></li>
                <li><a href="../templates/modules.php">Module           </a></li>
                <li><a href="../mail/contact.php">Contact Us            </a></li>
            </ul>
            <div class="buttons">
                <a href="#" class="login">Login</a>
                <a href="#" class="register">Register</a>
            </div>
        </nav>
    </header>
    <footer>&copy; Tung 2024</footer>
</body>

</html>