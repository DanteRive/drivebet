<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="header__logo" href="index.php">DRIVEBET</a>

            <nav class="nav">
                <a class="nav__link" name="service" href="promo.php">Promo</a>
                <a class="nav__link" name="service" href="bets.php">Bets</a>
                <a class="nav__link" name="service" href="news.php">News</a>
                <a class="nav__link" name="blog" href="comments.php">Comments</a>
                <?php if ($_SESSION['logged_user']) : ?>
                    <a class="nav__link" name="logout" href="components/logout.php">Logout</a>
                    <a class="nav__link" name="profile" href="profile.php"><?echo $_SESSION['logged_user']->name;?></a>
                <?php else : ?>
                    <a class="nav__link" name="signup" href="signup.php">Signup</a>
                    <a class="nav__link" name="login" href="login.php">Login</a>
                <?php endif;  ?>
            </nav>
        </div>
    </div>
</header>