<?php

// require_once __DIR__ . '/vendor/autoload.php';
// require_once __DIR__ . '/Core/Helper.php';
// require_once __DIR__ . '/Routes/Routes.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COGIP</title>
    <link rel="stylesheet" href="./public/assets/css/reset.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    </style>
</head>

<body>
    <div class="header">
        <nav class="nav-bar">
            <h1>COGIP</h1>
            <div class="nav-bar__link">
                <a href="#">Home</a>
                <a href="#">Invoices</a>
                <a href="#">Compagnies</a>
                <a href="#">Contacts</a>
            </div>
            <div class="nav-bar__btn">
                <button type="submit" class="nav-bar__btn--sign">Sign Up</button>
                <button type="submit" class="nav-bar__btn--login">Login</button>
            </div>
        </nav>
        <div class="header__title">
            <h2>MANAGE YOUR
                CUSTOMERS AND
                INVOICES EASLY</h2>
        </div>
        <div class="header__img">
            <img src="./public/assets/img/Illustration.png" alt="img par défault">
        </div>
    </div>
    <section class="section">
        <div class="section-invoices">
            <h2>Last invoices</h2>
            <div class="section-invoices__table">
                <table>
                    <tr>
                        <th>Invoice number</th>
                        <th>Dates due</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="section-contacts">
            <h2>Last contacts</h2>
            <div class="section-contacts__table">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Mail</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                        <td>Donnée 5</td>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                        <td>Donnée 5</td>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                        <td>Donnée 5</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="section-companies">
            <h2>Last companies</h2>
            <div class="section-companies__table">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>TVA</th>
                        <th>Country</th>
                        <th>Type</th>
                        <th>Created at</th>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                        <td>Donnée 5</td>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                        <td>Donnée 5</td>
                    </tr>
                    <tr>
                        <td>Donnée 1</td>
                        <td>Donnée 2</td>
                        <td>Donnée 3</td>
                        <td>Donnée 4</td>
                        <td>Donnée 5</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section class="bot">
        <div class="bot__title">
            <h2>work better in your company</h2>
        </div>
        <div class="bot__img">
            <img src="./public/assets/img/phone-footer.png" alt="">
        </div>
    </section>
    <footer>
        <hr>
        <div class="footer">
            <h2>cogip</h2>
        </div>
        <div class="footer__infos">
            <p>Square des Martyrs, 6000 Charleroi</p>
            <p>(123) 456-7890</p>
            <p>(123) 456-7890</p>
            <p>Social Media</p>
        </div>
        <div class="footer__conatct">
            <hr>
            <a href="#">Home</a>
            <a href="#">Invoices</a>
            <a href="#">Compagnies</a>
            <a href="#">Contacts</a>
            <a href="#">Privacy Policy</a>
        </div>
    </footer>
</body>

</html>