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
        <h2>Last contacts</h2>
        <div class="section-contacts__searchbar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="section-contacts__table">
            <?php
            if (!is_null($contacts) && is_array($contacts)) : ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Mail</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                    <?php foreach ($contacts as $contact) :  ?>

                        <tr>
                            <td><a href="contacts/<?php echo $contact['id']; ?>"><?php echo $contact['id']; ?></td>
                            <td><?php echo $contact['name']; ?></td>
                            <td><?php echo $contact['phone']; ?></td>
                            <td><?php echo $contact['email']; ?></td>
                            <td><?php echo $contact['company_id']; ?></td>
                            <td><?php echo $contact['created_at']; ?></td>
                        </tr>

                    <?php endforeach; ?>
                </table>
            <?php else : ?>
                <p>No contacts found.</p>
            <?php endif; ?>
        </div>
        <div class="section-contacts__navbar">
    <p>Page
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
    </p>
</div>


    </section>
    <?php
    require 'footer.php';
    ?>
</body>

</html>