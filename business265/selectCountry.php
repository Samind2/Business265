<?php
require "connect.php";
$sql = "SELECT * FROM country ";


$stmt = $conn->prepare($sql);

$stmt->execute();
?>

<table width="800" border="1">
  <tr>
    <th width="90"> <div align="center">CountryCode</div></th>
    <th width="140"> <div align="center">CountryName </div></th>
  </tr>

<?php
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
    
      <tr>
        <td>    
        <a href="detail country.php?CountryCode=<?php echo $result["CountryCode"]; ?>">
              <?php echo $result["CountryCode"]; ?>     </td>
        </a>
        <td>    <?php echo $result["CountryName"]; ?>  </td>
        
      </tr>
    
    <?php
      }
    ?>
    
    </table>
    
    <?php
    $conn = null;
    ?>