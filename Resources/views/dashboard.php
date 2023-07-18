<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">

</head>
<body>
<header>
  <div class="dashboard__header">
    <div class="dashboard__header__first__part">
      <div class="dashboard__header__first__part__title">
        <h1>Dashboard</h1>
        <p>dashboard/</p>
      </div>
    </div>
    <div class="dashboard-img__rectangle">
      <img src="../public/assets/img/Rectangle 22.svg" alt="rectangle mauve dashboard">
      <img src="../public/assets/img/img_dashboard.svg" alt="dashboard image">
      <div class="dashboard__header__info__message">
        <h2>Welcome back Henry!</h2>
        <p>You can here add an invoice, a company and some contacts</p>
      </div>
    </div>
  </div>
</header>

    <main>
        <section class="dashboard__sidebar">

            <div class="dashboard__sidebar__burger"></div>

            <div class="dashboard__sidebar__menu">
                <img src="../public/assets/img/img_contact.svg">
                <p>Prenom</p>
                <p>Nom</p>
                
                <nav>
                    <ul>
                        <li><img src="../public/assets/img/Icon_dashboard.svg"><a href="" class="dashboard__sidebar__menu__dashboard">Dashboard</a></li>
                        <li><img src="../public/assets/img/Icon_Invoices.svg"><a href="" class="dashboard__sidebar__menu__invoice">Invoices</a></li>
                        <li><img src="../public/assets/img/Icon_Companies.svg"><a href="" class="dashboard__sidebar__menu__company">Companies</a></li>
                        <li><img src="../public/assets/img/Icon_contact.svg"><a href="" class="dashboard__sidebar__menu__contact">Contacts</a></li>
                    </ul>
                </nav>
                <div>
                    <img>
                    <a>Logout</a>
                </div>
            </div>

        </section>
        <article class="container__main">
            <section class="dashboard__container__statistics">
                <h3>Statistics</h3>
            </section>

            <section class="dashboard__container__invoices">
                <h3>Last invoices</h3>
                
            </section>
            <section class="dashboard__container__contacts">
                <h3>Last contacts</h3>
                
            </section>

            <section class="dashboard__container__company">
                <h3>Last company</h3>
                
            </section>
        </article>
        
            
        
    </main>
 
 
 <?php
// if($_SERVER['REQUEST_METHOD'] === 'POST'){
//     $contactSpam1 = $_POST['spam1'];
//     $contactName = $_POST['contactName'];
//     $contactPhone = $_POST['contactPhone'];
//     $contactMail = $_POST['contactMail'];
//     $contactCompanyId = $_POST['contactCompanyId'];
//     $sanitizedContactName = htmlspecialchars($contactName, ENT_QUOTES, 'UTF-8');
//     $sanitizedContactPhone = htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8');
//     $sanitizedContactMail = htmlspecialchars($contactMail, FILTER_SANITIZE_MAIL);
//     $sanitizedContactCompanyId = htmlspecialchars($contactCompanyId, ENT_QUOTES, 'UTF-8');
//     $check = true;

//     if($contactSpam1){
//         exit();
//     }
//     if ($sanitizedContactCompanyId !== $contactCompanyId){
//         $check = false;
//     }
//     if($sanitizedContactMail !== $contactMail){
//         $check = false;
//     }
//     if($sanitizedContactName !== $contactName)
//     {
//         $check = false;
//     }
//     if($sanitizedContactPhone !== $contactPhone){
//         $check = false;
//     }
//     if ($check == false){
//         echo 'please, remove the specialcharacters from your inputs';
//     }


// }
//  $spam2 = $_POST['spam2'];
//  $spam3 = $_POST['spam3'];
?>




        <form method="POST" action="dashboard">
<table>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Mail</th>
    </tr>
    <?php foreach ($contacts as $contact):  ?>
    <tr onclick='SaveBtnContact(this, "<?php echo $contact["id"] ?>")'>     
        <td onclick='ContactName(this, "<?php echo $contact["id"] ?>")' ><?php echo $contact['name']; ?></td>
        <td onclick='ContactPhone(this, "<?php echo $contact["id"] ?>")' ><?php echo $contact['phone']; ?></td>
        <td><?php echo $contact['email']; ?></td>
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

    <tr onclick='SaveBtnCompany(this, "<?php echo $company["id"] ?>")'>  
        
        <td onclick='CompanyName(this, "<?php echo $company["id"] ?>")' ><?php echo $company['name']; ?></td>
        <td><?php echo $company['tva']; ?></td>
        <td><?php echo $company['country']; ?></td>
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
        <input name="contactName" type="text" value="" required>
    <label for="contactPhone">Contact phone:</label>
        <input name="contactPhone" type="text" value="" required>
    <label for="contactMail">Contact mail:</label>
        <input name="contactMail" value="" type="email" required>
    <label for="contactCompanyId">Contact company:</label>
        <input name="contactCompanyId" value="" type="number" required>
    <input type="hidden" name="spam1" class="spam" value="">

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
        <input name="companyName" type="text" value="" required>
    <label for="companyType">Company type:</label>
        <input name="companyType" type="number" value="" required>
    <label for="companyCountry">Country of the company:</label>
        <input name="companyCountry" type="text" value="" required>
    <label for="companyTVA">TVA:</label>
        <input name="companyTVA" type="text" value="" required>
        <input type="hidden" name="spam2" class="spam" value="">

        <button type="submit" name="validationCompany">Validation Company</button>
</form>

    <!-- mettre dans une section -->
    <!-- fonction add invoices -->
<form method="POST" action="dashboard">
    <label for="invoiceNumber">Invoice number:</label>
        <input name="invoiceNumber" type="text" value="" required>
    <label for="invoiceName">Invoice Company name:</label>
        <input name="invoiceName" type="text" value="" required>
        <input type="hidden" name="spam3" class="spam" value="">

        <button type="submit" name="validationInvoice">Validation Invoice</button>
</form>
</body>
</html>
  <script>
        let SaveBtn;
        let DelBtn;
    function createDeleteBtn(line){
        let existingBtn = line.querySelector('.DeleteBtn');
        if(!existingBtn){
        DelBtn = document.createElement('button');
        DelBtn.type = 'submit';
        DelBtn.innerText = 'Delete';
        DelBtn.className = 'DeleteBtn';
        line.appendChild(DelBtn);
        }
}
    function createSaveBtn(line){
        createDeleteBtn(line);
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
    DelBtn.name = "deleteInvoice";
    DelBtn.value = id;
}
function SaveBtnCompany(line, id){
    createSaveBtn(line);
    SaveBtn.name = 'editCompany';
    SaveBtn.value = id;
    DelBtn.name = "deleteCompany";
    DelBtn.value = id;
}
function SaveBtnContact(line, id){
    createSaveBtn(line);
    SaveBtn.name = "editContact";
    SaveBtn.value = id;
    DelBtn.name ="deleteContact";
    DelBtn.value = id;
}
function DeleteInvoice(line, id){
    createDeleteBtn(line);
    SaveBtn.name = "deleteInvoice";
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
    console.log(id);
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
function CompanyName(cell, id){
    createInputCell(cell);
    input.setAttribute('Company-id', id);
    input.name = "companyName["+ id + "]";
    input.addEventListener('keydown', (event) =>{
    if(event.keyCode == 13){
    cell.innerText = input.value;
    console.log(input.value);  
    }
    });
    input.addEventListener('blur', ()=>{
        cell.innertext = input.value;
        console.log(input.value);
    });
}
function ContactName(cell, id){
    createInputCell(cell);
    input.setAttribute('Contact-id', id);
    input.name = "contactName["+ id + "]";
    input.addEventListener('keydown', (event) =>{
    if(event.keyCode == 13){
    cell.innerText = input.value;
    console.log(input.value);  
    }
    });
    input.addEventListener('blur', ()=>{
        cell.innertext = input.value;
        console.log(input.value);
    });
}
function ContactPhone(cell, id){
    createInputCell(cell);
    input.setAttribute('Company-id', id);
    input.name = "contactPhone["+ id + "]";
    input.addEventListener('keydown', (event) =>{
    if(event.keyCode == 13){
    cell.innerText = input.value;
    console.log(input.value);  
    }
    });
    input.addEventListener('blur', ()=>{
        cell.innertext = input.value;
        console.log(input.value);
    });
}
</script>
