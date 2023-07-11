<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- rajouter icone poubelle pour les boutons delete -->
    <form method="">
<table>
                    <tr>
                        <th>Id</th>
                        <th>Invoice number</th>
                        <th>Dates due</th>
                        <th>Created at</th>
                        <th>Name</th>
                    </tr>
                    <?php foreach ($invoices as $invoice):  ?>

                    <tr>
                        <td><?php echo $invoice['id']; ?></td>
                        <td value=<?php $invoice['id_company']?> name="invoiceIdCompany"><?php echo $invoice['id_company']; ?></td>
                        <td><?php echo $invoice['created_at']; ?></td>
                        <td><?php echo $invoice['updated_at']; ?></td>
                        <td value=<?php $invoice['name']?> name="invoiceName"><?php echo $invoice['name']; ?></td>
                        <td><button type="submit" value="">Edit</button> <button type="submit" value="delete">delete</button></td>       
                        
                    </tr>
                    <?php endforeach; ?>
                    </table>    
    </form>

                        <form method="">
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
                        <td><button type="submit" value="">Edit</button> <button type="submit" value="delete">delete</button></td>
                    </tr>
                    </form>
                    <?php endforeach; ?>
                    </table>
                        <form method="">
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
                    <td><button type="submit" value="">Edit</button> <button type="submit" value="delete">delete</button></td>                
                </tr>

                <?php endforeach; ?>
                </table>
                    </form>

                    <!-- mettre dans une section -->
                    <!-- fonction add invoices -->
                    <!-- <form method="POST" action="."> -->
                        <label for="invoicesNumber">Invoice number:</input>
                            <input name="invoicesNumber" type="text" value="">
                        <label for="invoicesCompany">Invoice Company name:</input>
                            <input name="invoicesCompany" type="text" value="">

                            <button type="submit" name="validationInvoice">Validation Invoice</button>
                    </form>
                    <?php 
                    
                    
                    
                    ?>
                    <?php 
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    ?>
                    <!-- mettre dans une autre section -->
                        <!-- fonction add Companies -->
                    <form method="POST" action=".">
                        <label for="companyName">Company name:</input>
                            <input name="companyName" type="text" value="">
                        <label for="companyType">Company type:</input>
                            <input name="companyType" type="number" value="">
                        <label for="companyCountry">Country of the company:</label>
                            <input name="companyCountry" type="text" value="">
                        <label for="companyTVA">TVA:</label>
                            <input name="companyTVA" type="text" value="">
                        
                            <button type="submit" name="validationCompany" value="ValidationCompany">Validation Company</button>
                    </form>
                   <?php 
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    ?>
                    <!-- mettre dans une autre section -->
                         <!-- fonction add Contacts -->
                    <!-- <form method="POST" action="."> -->
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


</body>
</html>