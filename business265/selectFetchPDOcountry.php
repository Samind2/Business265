<?php
try {
    require 'connect.php';
    $sql = 'SELECT * FROM country';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
 
    //แบบที่ 1 //FETCH=ดึง 
    //while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) //จะทำวนลูปก็ต่อเมื่อข้อมูลเป้นจริง 
   // {
       // echo '<br>' .
       //     'รหัสลูกค้าของฉันแบบที่ 1 : ' .
       //     $result['CustomerID'] . //Case sensitive=เคสอ่อนไหว ชื่อต้องตรงกับชื่อฐานข้อมูลเท่านั้น
       //     ' วันเกิด : ' .
       //     $result['Birthdate'] .
       //     ' ยอดหนี้ : ' .
       //     $result['OutstandingDebt'];
  //  }

    //แบบที่ 2 //FETCH=ดึง 
    while ($result = $stmt->fetch(PDO::FETCH_NUM)) //จะทำวนลูปก็ต่อเมื่อข้อมูลเป้นจริง 
    {
        echo '<br>' . "CountryCode : " .  $result[0] . " CountryName : "
            . $result[1] ;
    }
 
} catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}
 
$conn = null;
?>
 
 