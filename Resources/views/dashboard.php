<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- rajouter icone poubelle pour les boutons delete -->
    <form method="POST" action="/dashboard">
    <table>
        <tr>
            <th>Id</th>
            <th>Invoice number</th>
            <th>Dates due</th>
            <th>Created at</th>
            <th>Name</th>
        </tr>
        <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?php echo $invoice['id']; ?></td>
                <td><?php echo $invoice['id_company']; ?></td>
                <td><?php echo $invoice['created_at']; ?></td>
                <td><?php echo $invoice['updated_at']; ?></td>
                <td><?php echo $invoice['name']; ?></td>
                <td>
                <input type="text" name="invoiceName[<?php echo $invoice['id']; ?>]" value="<?php echo $invoice['name']; ?>">
                <input type="text" name="id_company[<?php echo $invoice['id']; ?>]" value="<?php echo $invoice['id_company']; ?>">
                </td>
                <td>
                    <button type="submit" name="editInvoice" value="<?php echo $invoice['id']; ?>">Edit</button>
                    <button type="submit" name="deleteInvoice" value="<?php echo $invoice['id']; ?>">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>    
</form>

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
            <td><button type="submit" value="">Edit</button>
            <button type="submit" value="delete">delete</button></td>
        </tr>
        </form>
        <?php endforeach; ?>
        </table>
            <form method="POST">
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
    <td><?php echo $contact['name']; ?></td>
    <td><?php echo $company['country']; ?></td>
    <td><?php echo $company['type_id']; ?></td>
    <td><?php echo $company['created_at']; ?></td>
    <td>
        <button type="submit" value="">Edit</button>
        <button type="submit" value="delete">Delete</button>
    </td>
</tr>

<?php endforeach; ?>
</table>
    </form>
</body>
</html>