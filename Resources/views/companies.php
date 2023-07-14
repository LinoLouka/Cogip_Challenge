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
        <h2>All companies</h2>
        <div class="section-companies__searchbar">
            <input type="text" placeholder="Search company name" onkeyup="searchCompanies()" id="search_companies">
        </div>
        <div class="section-companies__table">


        <?php
        if (!is_null($companies) && is_array($companies)): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>TVA</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Type</th>
                </tr>
                <?php foreach ($companies as $company):  ?>
                <tr>
                    <td><a href="companies/<?php echo $company['id'] ?>"><?php echo $company["id"]?></a></td>
                    <td><?php echo $company['tva']; ?></td>
                    <td><?php echo $company['name']; ?></td>
                    <td><?php echo $company['country']; ?></td>
                    <td><?php echo $company['type_id']; ?></td>
                </tr>


                    <?php endforeach; ?>
                </table>
            <?php else : ?>
                <p>No companies found.</p>
            <?php endif; ?>

        </div>
        <div class="section-companies__navbar">

        <a class="navpage" href="?page=1">First</a>
        <?php if ($pagination['currentPage'] > 1) : ?>
            <a class="navpage" href="?page=<?php echo $pagination['currentPage'] - 1; ?>">&lt;</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $pagination['totalPages']; $i++) : ?>
            <a class="navpage <?php echo $i == $pagination['currentPage'] ? 'active' : ''; ?>" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
        <?php if ($pagination['currentPage'] < $pagination['totalPages']) : ?>
            <a class="navpage" href="?page=<?php echo $pagination['currentPage'] + 1; ?>">&gt;</a>
        <?php endif; ?>
        <a class="navpage" href="?page=<?php echo $pagination['totalPages']; ?>">Last</a>
</div>


    </section>
    <?php
    require 'footer.php';
    ?>
  
</body>
<script defer src="../public/assets/js/header_remove.js"></script>

<script defer src="../public/assets/js/companies.js"></script>
</html>