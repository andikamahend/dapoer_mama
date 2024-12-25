<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password</title>
        <!-- Custom CSS Link -->
        <link rel="stylesheet" href="style.css">
        <style>
        .back-button {
            display: inline-block;
            text-decoration: none;
            color: black;
            margin: 10px;
            /* Jarak dari tepi */
            position: absolute;
            /* Menggunakan posisi absolut */
            top: 4rem;
            /* Jarak dari atas */
            left: 5rem;
            /* Jarak dari kiri */
        }
        </style>
    </head>

    <body>
        <a href="../index.php" class="input__button__shadow back-button">Back</a>
        <div class="input__container">
            <form action="verify_code_process.php" method="POST" onsubmit="showMessage()">
                <h2 style="color: black;">Forgot Password</h2>
                <div class="input__button__shadow">
                    <input type="email" name="email" required="required">
                    <span>Email Address</span>
                    <i></i>
                </div>
                <div class="input__button__shadow">
                    <input type="number" name="code_reset" required="required">
                    <span>code_reset</span>
                    <i></i>
                </div>
                <div class="imp-links">
                    <a href="register.php">Sign up</a>
                    <a href="login.php">Sign in</a>
                </div>
                <button type="submit" class="input__button__shadow">login</button>

            </form>
        </div>
    </body>

</html>