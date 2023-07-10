<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
                    <tr>
                        <th>Id</th>
                        <th>Invoice number</th>
                        <th>Dates due</th>
                        <th>Created at</th>
                    </tr>
                    <?php foreach ($invoices as $invoice):  ?>

                    <tr>
                        <td><?php echo $invoice['id']; ?></td>
                        <td><?php echo $invoice['id_company']; ?></td>
                        <td><?php echo $invoice['created_at']; ?></td>
                        <td><?php echo $invoice['updated_at']; ?></td>
                    </tr>

                    <?php endforeach; ?>
                    </table>    



                    <table>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Mail</th>
                        <th>Company</th>
                        <th>Created at</th>
                    </tr>
                    <?php foreach ($contacts as $contact):  ?>

                    <tr>
                        <td><?php echo $contact['name']; ?></td>
                        <td><?php echo $contact['phone']; ?></td>
                        <td><?php echo $contact['email']; ?></td>
                        <td><?php echo $contact['company_id']; ?></td> 
                        <td><?php echo $contact['created_at']; ?></td>
                    </tr>

                    <?php endforeach; ?>
                    </table>

                    <table>
                    <tr>
                        <th>Id</th>
                        <th>TVA</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Type</th>
                        <th>Created at</th>
                    </tr>
                    <?php foreach ($companies as $company):  ?>
                <tr>
                    <td><?php echo $company['id']; ?></td>
                    <td><?php echo $company['tva']; ?></td>
                    <td><?php echo $company['name']; ?></td>
                    <td><?php echo $company['country']; ?></td>
                    <td><?php echo $company['type_id']; ?></td>
                    <td><?php echo $company['created_at']; ?></td>
                </tr>

                <?php endforeach; ?>
                </table>






</body>
</html>