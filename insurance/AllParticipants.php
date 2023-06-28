<!DOCTYPE html>
<html>
<head>
<title> Mousumi 205040</title>
<head>
<body>
<h1> Participants List </h1>
  <?php
  echo "<pre>\n";
  require_once "pdo.php";
  $stmt = $pdo->query("SELECT Id , name , occupation , mobile_no , email FROM informations");
  echo '<table border="1">'."\n";
  echo "<td><b>Id</b></td>"."<td> <b>Name </b></td>"."<td><b>Occupation</b></td>"."<td><b>Mobile No</b></td>"."<td><b>email</b></td>"."<td><b>Delete<b></td>";
  while ( $row =$stmt->fetch(PDO::FETCH_ASSOC) ) {
echo "<tr><td>";
echo ($row['Id']);
echo ("</td><td>");
echo ($row['name']);
echo ("</td><td>");
echo ($row['occupation']);
echo ("</td><td>");
echo ($row['mobile_no']);
echo ("</td><td>");
echo ($row['email']);
echo ("</td><td>");

  echo('<form method="post"><input type="hidden"');
  echo ('name="Id" value="'.$row['Id'].'">'."\n");
  echo('<input type="submit" value="Delete" name="Delete">');
  echo("\n</form>\n");
  echo ("</td></tr>\n");
  }
  echo"</table>\n";

  if(isset($_POST['Id'])) {
  $sql="delete from informations where Id = :Id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':Id'=>$_POST['Id']));
}

?>
<a href="add.php">Add New Participants</a>
</body>
</html>
