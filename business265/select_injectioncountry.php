<?php

require
"connect.php";

if
(isset($_GET["countryName"]))


{
    $strcountryName =
$_GET["countryName"];

    echo "<br>" .
"strcountryName = " .$strcountryName;   

    $sql = "SELECT * FROM country where
countryName = '" . $strcountryName . "'";

    echo "<br>" . " sql =
" .$sql . "<br>";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll();

    print_r($result);

}

?>