<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COGIP</title>
    <link rel="stylesheet" href="../public/assets/css/reset.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>
    <?php
    require 'header.php';
    ?>
    <section class="header-title-img">
        <div class="header__title">
            <h2>MANAGE YOUR
                CUSTOMERS AND
                INVOICES EASLY</h2>
        </div>
        <div class="header__img">
            <img src="../public/assets/img/img-header.png" alt="img par défault">
        </div>
    </section>
    <section class="section">
        <div class="section-invoices">
            <h2>Last invoices</h2>
            <div class="section-invoices__table">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Invoice number</th>
                        <th>Dates due</th>
                        <!-- <th>Company</th> -->
                        <th>Created at</th>
                    </tr>
                    <?php foreach ($invoices as $invoice) :  ?>

                        <tr>
                            <td><?php echo $invoice['id']; ?></td>
                            <td><?php echo $invoice['id_company']; ?></td>
                            <td><?php echo $invoice['created_at']; ?></td>
                            <td><?php echo $invoice['updated_at']; ?></td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </div>
            <div class="section-invoices__img">
                <img src="../public/assets/img/hand.png" alt="hand with clipboard" align="right">
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
                    <?php foreach ($contacts as $contact) :  ?>

                        <tr>
                            <td><?php echo $contact['name']; ?></td>
                            <td><?php echo $contact['phone']; ?></td>
                            <td><?php echo $contact['email']; ?></td>
                            <td><?php echo $contact['company_id']; ?></td>
                            <td><?php echo $contact['created_at']; ?></td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </div>
            <div class="section-contacts__img">
                <img src="../public/assets/img/lamp.png" alt="lamp" align="left">
            </div>

        </div>
        <div class="section-companies">
            <h2>Last companies</h2>
            <div class="section-companies__table">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>TVA</th>
                        <th>Country</th>
                        <th>Type</th>
                        <th>Created at</th>
                    </tr>
                    <?php foreach ($companies as $company) :  ?>
                        <tr>
                            <td><?php echo $company['id']; ?></td>
                            <td><?php echo $company['name']; ?></td>
                            <td><?php echo $company['tva']; ?></td>
                            <td><?php echo $company['country']; ?></td>
                            <td><?php echo $company['type_id']; ?></td>
                            <td><?php echo $company['created_at']; ?></td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>
    <section class="bot">
        <div class="bot__title">
            <h2>work better in your company</h2>
        </div>
        <div class="bot__img">
            <img src="../public/assets/img/phone-footer.png" alt="téléphone jaune">
        </div>
    </section>
    <?php
    require 'footer.php';
    ?>

</body>


</html>