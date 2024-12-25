<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
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
        <div class="input__container" style="z-index: 1;">
            <div class="shadow__input"></div>
            <form action="login_proses.php" method="POST" style="z-index: 2;">
                <h2 style="color: black;">Sign in</h2>

                <!-- Pesan error global -->
                <?php if (isset($_GET['error'])): ?>
                <div class="error-message">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
                <?php endif; ?>

                <div class="input__button__shadow">
                    <input type="text" name="username" required="required">
                    <span>Username</span>
                    <i></i>
                    <!-- Pesan error jika username salah -->
                    <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_username'): ?>
                    <small style="color: red;">Username tidak ditemukan.</small>
                    <?php endif; ?>
                </div>
                <div class="input__button__shadow">
                    <input type="password" name="password" required="required">
                    <span>Password</span>
                    <i></i>
                    <!-- Pesan error jika password salah -->
                    <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_password'): ?>
                    <small style="color: red;">Password salah.</small>
                    <?php endif; ?>
                </div>
                <div class="imp-links">
                    <a href="fpassword.php">Forget Password</a>
                    <a href="register.php">Sign up</a>
                </div>
                <button type="submit" class="input__button__shadow">login</button>
            </form>
        </div>
    </body>

</html>