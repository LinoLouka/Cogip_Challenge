<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- rajouter icone poubelle pour les boutons delete -->


             
<form method="POST" action="dashboard">
<table>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Mail</th>
    </tr>
    <?php foreach ($contacts as $contact):  ?>
    <tr>      
        <td><?php echo $contact['name']; ?></td>
        <td><?php echo $contact['phone']; ?></td>
        <td><?php echo $contact['email']; ?></td>
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
                   
<form method="POST" action="dashboard">
<table>
    <tr>
        <th>Name</th>
        <th>TVA</th>   
        <th>Country</th>
    </tr>
    <?php foreach ($companies as $company):  ?>

    <tr>    
        
        <td><?php echo $company['name']; ?></td>
        <td><?php echo $company['tva']; ?></td>
        <td><?php echo $company['country']; ?></td>
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
        <th>Invoice number</th>
        <th>Dates due</th>
        <th>Name</th>
    </tr>
    <?php foreach ($invoices as $invoice): ?>

        <tr onclick='SaveBtnInvoice(this, "<?php echo $invoice["id"] ?>")'>
          
            <td onclick='InvoiceIdCompany(this, "<?php echo $invoice["id"] ?>")' ><?php echo $invoice['id_company']; ?></td>
            <td><?php echo $invoice['created_at']; ?></td>
            <td onclick='InvoiceName(this, "<?php echo $invoice["id"] ?>")'><?php echo $invoice['name']; ?></td>
          
            <td><button type="submit" name="deleteInvoice" value="<?php echo $invoice['id']; ?>">Delete</button></td>

        </tr>
    <?php endforeach; ?>
</table>    
</form>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!-- mettre dans une autre section -->
        <!-- fonction add Contacts -->
<form method="POST" action="dashboard">
    <label for="contactName">Contact name:</label>
        <input name="contactName" type="text" value="">
    <label for="contactPhone">Contact phone:</label>
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

    <!-- mettre dans une section -->
    <!-- fonction add invoices -->
<form method="POST" action="dashboard">
    <label for="invoiceNumber">Invoice number:</label>
        <input name="invoiceNumber" type="text" value="">
    <label for="invoiceName">Invoice Company name:</label>
        <input name="invoiceName" type="text" value="">

        <button type="submit" name="validationInvoice">Validation Invoice</button>
</form>

    <script>
        let SaveBtn;
    function createSaveBtn(line){
        let existingBtn = line.querySelector('.saveBtn');
        if(!existingBtn){
        SaveBtn = document.createElement('button');
        SaveBtn.type = 'submit';
        SaveBtn.innerText = 'Save';
        SaveBtn.className = 'saveBtn';
        line.appendChild(SaveBtn);
        }
        
}  
function SaveBtnInvoice(line, id){
    createSaveBtn(line);
    SaveBtn.name = 'editInvoice';
    SaveBtn.value = id;
}
let input;
function createInputCell(cell){
    let content = cell.innerText;
    input = document.createElement('input');
    input.type='text';
    input.value=content;
    cell.innerText = '';
    cell.appendChild(input);
    input.focus();
    

}
function InvoiceName(cell, id){
    createInputCell(cell);
    input.name= "invoiceName[" + id + "]";
    console.log(input.name);
    input.addEventListener('keydown', (event) =>{
    if(event.keyCode == 13){
    cell.innerText = input.value;
    console.log(cell.innerText);  
    }
    });
    input.addEventListener('blur', ()=>{
        cell.innertext = input.value;
        console.log(cell.innerText);
    });
}
function InvoiceIdCompany(cell, id){
    createInputCell(cell);
    input.setAttribute('invoice-id',id);
    input.name= "id_company["+ id + "]";
    console.log(input.name);
    input.addEventListener('keydown', (event) =>{
    if(event.keyCode == 13){
    input.blur();
    cell.innerText = input.value;
    }
    });
    input.addEventListener('blur', ()=>{
        cell.innertext = input.value;
    });
}
</script>
</body>
</html>