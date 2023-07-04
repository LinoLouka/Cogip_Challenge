<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COGIP</title>
    <link rel="stylesheet" href="/public/assets/css/reset.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    </style>
</head>

<body>
    <?php
    require_once __DIR__ . '/Resources/views/header.php';
    ?>
    <div class="header__title">
        <h2>MANAGE YOUR
            CUSTOMERS AND
            INVOICES EASLY</h2>
    </div>
    <div class="header__img">
        <img src="./public/assets/img/img-header.png" alt="img par défault">
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
    <?php
    require_once __DIR__ . '/Resources/views/footer.php';
    ?>
</body>

</html>