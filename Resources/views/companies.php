<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COGIP</title>
    <link rel="stylesheet" href="../../public/assets/css/reset.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
    <?php
    require 'header.php';
    ?>

    <section class="section">
        <h2>Last companies</h2>
        <div class="section-companies__searchbar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="section-companies__table">
        <?php
        if (!is_null($companies) && is_array($companies)): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Type</th>
                </tr>
                <?php foreach ($companies as $company):  ?>
                <tr>
                    <td><a href="companies/<?php echo $company['id'] ?>"><?php echo $company["id"]?></a></td>
                    <td><?php echo $company['name']; ?></td>
                    <td><?php echo $company['country']; ?></td>
                    <td><?php echo $company['type_id']; ?></td>
                </tr>

<?php endforeach; ?>
</table>
<?php else: ?>
<p>No companies found.</p>
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