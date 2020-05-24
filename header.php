<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">DRIVEBET</div>

            <nav class="nav">
                <a class="nav__link" name="about" href="#">About</a>
                <a class="nav__link" name="service" href="#">Service</a>
                <a class="nav__link" name="blog" href="#">Blog</a>
                <?php if ($_SESSION['logged_user']) : ?>
                    <a class="nav__link" name="logout" href="components/logout.php">Logout</a>
                <?php else : ?>
                    <a class="nav__link" name="signup" href="signup.php">Signup</a>
                    <a class="nav__link" name="login" href="login.php">Login</a>
                <?php endif;  ?>
            </nav>
        </div>
    </div>
</header>