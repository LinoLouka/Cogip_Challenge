<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- rajouter icone poubelle pour les boutons delete -->

                        <!-- The contacts -->
<form method="POST" action="dashboard">
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
        <td onclick='createInputCell(this)'><?php echo $contact['name']; ?></td>
        <td><?php echo $contact['phone']; ?></td>
        <td><?php echo $contact['email']; ?></td>
        <td onclick='createInputCell(this)' ><?php echo $contact['company_id']; ?></td>
        <td><?php echo $contact['created_at']; ?></td>
        <td><?php echo $contact['updated_at']; ?></td>
        <td>
        <input type="text" name="contactName[<?php echo $contact['id']; ?>]" value="<?php echo $contact['name']; ?>">
        <input type="text" name="contactCompanyId[<?php echo $contact['id']; ?>]" value="<?php echo $contact['company_id']; ?>">
        </td>
        <td>
            <button type="submit" name="editContact" value="<?php echo $contact['id']; ?>">Edit</button>
            <button type="submit" name="deleteContact" value="<?php echo $contact['id']; ?>">Delete</button>
        </td>
    </tr>           
    <?php endforeach; ?>
</table>
</form>
                    <!-- The Companies -->
<form method="POST" action="dashboard">
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
        <td onclick='createInputCell(this)'><?php echo $company['name']; ?></td>
        <td><?php echo $company['country']; ?></td>
        <td><?php echo $company['type_id']; ?></td>
        <td><?php echo $company['created_at']; ?></td>
        <td><input type="text" name="companyName[<?php echo $company['id']; ?>]" value="<?php echo $company['name']; ?>"></td>
        <td>
            <button type="submit" name="editCompany" value="<?php echo $company['id']; ?>">Edit</button>
            <button type="submit" name="deleteCompany" value="<?php echo $company['id']; ?>">Delete</button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</form>                 
                   
<form method="POST" action="dashboard">
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
            <td onclick='createInputCell(this)' ><?php echo $invoice['id_company']; ?></td>
            <td><?php echo $invoice['created_at']; ?></td>
            <td><?php echo $invoice['updated_at']; ?></td>
            <td onclick='createInputCell(this)'><?php echo $invoice['name']; ?></td>
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
    <script>
        function createInputCell(cell){
            let content = cell.innerText;

            let input = document.createElement('input');
            input.type='text';
            input.value=content;

            cell.innerText = '';
            cell.appendChild(input);

            input.focus();

        }
    </script>
</form>
  
<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!-- mettre dans une autre section -->
        <!-- fonction add Contacts -->
<form method="POST" action="dashboard">
    <label for="contactName">Contact name:</input>
        <input name="contactName" type="text" value="">
    <label for="contactPhone">Contact phone:</input>
        <input name="contactPhone" type="number" value="">
    <label for="contactMail">Contact mail:</label>
        <input name="contactMail" value="" type="email">
    <label for="contactCompanyId">Contact company:</label>
        <input name="contactCompanyId" value="" type="number">

    <button type="submit" name="validationContact">Validation contact</button>
</form>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


    <!-- mettre dans une autre section -->
        <!-- fonction add Companies -->
<form method="POST" action="dashboard">
    <label for="companyName">Company name:</label>
        <input name="companyName" type="text" value="">
    <label for="companyType">Company type:</label>
        <input name="companyType" type="number" value="">
    <label for="companyCountry">Country of the company:</label>
        <input name="companyCountry" type="text" value="">
    <label for="companyTVA">TVA:</label>
        <input name="companyTVA" type="text" value="">
    
        <button type="submit" name="validationCompany">Validation Company</button>
</form>
<form>
    <!-- mettre dans une section -->
    <!-- fonction add invoices -->
<form method="POST" action="dashboard">
    <label for="invoicesNumber">Invoice number:</input>
        <input name="invoicesNumber" type="text" value="">
    <label for="invoicesCompany">Invoice Company name:</input>
        <input name="invoicesCompany" type="text" value="">

        <button type="submit" name="validationInvoice">Validation Invoice</button>
</form>
</body>
</html>