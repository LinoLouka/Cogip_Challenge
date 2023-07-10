<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COGIP</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
    require 'header.php';
    ?>

    <section class="section">
        <h2>Last invoices</h2>
        <div class="section-invoices__searchbar">
            <input type="text" placeholder="Search...">
        </div>

        <div class="section-invoices__table">

            <?php

            if (!is_null($invoices) && is_array($invoices)) : ?>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Invoice number</th>
                        <th>Due dates</th>
                        <!-- <th>Company</th> -->
                        <th>Created at</th>
                    </tr>
                    <?php foreach ($invoices as $invoice) :  ?>

                        <tr>
                            <td><a href="invoices/<?php echo $invoice['id'] ?>"><?php echo $invoice["id"] ?></a></td>
                            <td><?php echo $invoice['id_company']; ?></td>
                            <td><?php echo $invoice['created_at']; ?></td>
                            <td><?php echo $invoice['updated_at']; ?></td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            <?php else : ?>
                <p>No invoices found.</p>
            <?php endif; ?>

        </div>
        <div class="section-invoices__navbar">
            <p>Page
                <a class="navpage" href="#" target="_top">First</a>
                <a class="navpage" href="#" target="_top">1</a>
                <a class="navpage" href="#" target="_top">2</a>
                <a class="navpage" href="#" target="_top">>></a>
                <a class="navpage" href="#" target="_top">Last</a>
            </p>
        </div>

    </section>
    <?php
    require 'footer.php';
    ?>
</body>

</html>