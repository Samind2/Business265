<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addcustomer</title>
</head>
<body>
    <h1>Add customer</h1>
    <form action="addCustomer.php" method="POST">
        <input type="text" placeholder="Enter Customer ID" name="CustomerID">
    
    <br><br>
    <input type="text" placeholder="name" name="Name">
    <br><br>
    <input type="date" name="Birthdate">
    <br><br>
    <input type="text" placeholder="email" name="Email">
    <br><br>
    <input type="text" placeholder="Enter Country code" name="CountryCode">
    <br><br>
    <input type="text" placeholder="Enter Oustanding debt" name="OutandingDebt">
    <input type="submit">
    </form>

</body>
</html>

<?php
//if(!empty($_POST['CustomerID']) && !empty($_POST['Name']) && !empty($_POST['Birthdate']) && !empty($_POST['Email']) && !empty($_POST['CountryCode']) && !empty($_POST['OutandingDebt']))
if(!empty($_POST['CustomerID']))
{
    echo 'mind';
   require 'connect.php';
    $sql_insert="insert into customer values (:CustomerID, :Name, :Birthdate, :Email, :CountryCode, :OutandingDebt)";

    $stmt = $conn->prepare($sql_insert);
    $stmt->bindParam(':CustomerID', $_POST['CustomerID']);
    $stmt->bindParam(':Name', $_POST['Name']);
    $stmt->bindParam(':Birthdate', $_POST['Birthdate']);
    $stmt->bindParam(':Email', $_POST['Email']);
    $stmt->bindParam(':CountryCode', $_POST['CountryCode']);
    $stmt->bindParam(':OutandingDebt', $_POST['OutandingDebt']);

    if($stmt->execute()){
        $message='Suscessfully add new customer';
        //header("Location:/business/selectCountry1php");
    }

    else
    {
        $message='Fail to add new customer';
    }
    echo $message;
    $conn=null;
}
?>