<header>
    <nav class="nav-bar">
        <h1>COGIP</h1>
        <div class="nav-bar__link">
            <a type="button" href="home">Home</a>
            <a type="button" href="invoices">Invoices</a>
            <a type="button" href="companies">Companies</a>
            <a type="button" href="contacts">Contacts</a>
        </div>
        <!-- <div class="nav-bar__btn"> -->
            <?php session_start();
        if ($_SESSION){
            if($_SESSION['user_role'] == 'user'){
                echo '<div class="nav-bar__btn">';
                echo '<a type="submit" href="logout" class="nav-bar__btn--sign" name="logout">Logout</a>';
                echo '</div>';
            }
            if($_SESSION['user_role'] == 'admin'){
                echo '<div class="nav-bar__btn">';
                echo '<a type="submit" href="logout" class="nav-bar__btn--sign">Logout</a>';
                echo '<a type="submit" href="dashboard"  class="nav-bar__btn--login" name="dashboard">dashboard</a>';
                echo '</div>';
            }
        }
        else {        echo '<div class="nav-bar__btn">';
                echo '<button type="submit" class="nav-bar__btn--sign"  href="register">Sign Up</button>';
                echo '<button type="submit" class="nav-bar__btn--login"  href="login">Login</button>';
                echo '</div>';
        }
?>
    </nav>
    <div class="header-title-img">
        <div class="header__title">
            <h2>MANAGE YOUR
                CUSTOMERS AND
                INVOICES EASLY</h2>
        </div>
        <div class="header__img">
            <img src="../public/assets/img/img-header.svg" alt="img par défault">
        </div>
    </div>
    <div class="header-title-img__rectangle">
        <img src="../public/assets/img/rectangle_header.svg" alt="rectangle blanc header">
    </div>
</header>