<?php
if(isset($_GET['CustomerID'])):
    echo"<br>" . $_GET['CustomerID'];
    require 'connect.php';
    $count=0;
    $sql = "SELECT * FROM customer where CustomerID = :CustomerID";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':CustomerID', $_GET['CustomerID']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<br>**********<br>";

    while ($row = $stmt->fetch()) {
        echo $row['CustomerID'].''.$row['Name']."<br/>";
        $count++;
    }

    //echo "count ... ".$count;
    if($count==0)
        echo"<br>No data ... <br>";
    $conn=null;
endif;
?>