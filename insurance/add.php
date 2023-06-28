<!DOCTYPE html>
<html>
<head>
<title> Mousumi-205040</title>
<head>
<body>
<a href="AllParticipants.php">View All Records</a>
<?php
if ( isset($_POST['cancel'] ) ) {
    header("Location: index.php");
    return;
}

echo "<pre>\n";
require_once "pdo.php";
$stmt = $pdo->query("SELECT Id, name , occupation , mobile_no , email FROM informations");
echo '<table border="1">'."\n";
echo "<td><b>Id</b></td>"."<td> <b>name</b></td>"."<td><b>occupation</b></td>"."<td><b>mobile_no</b></td>"."<td><b>email</b></td>";
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
echo ("</td></tr>");
}
echo"</table>\n";

$failure = false;


if (isset($_POST['name']) && isset($_POST['occupation']) && isset($_POST['mobile_no']) && isset($_POST['email']) ) {
$sql = "insert into informations(name , occupation , mobile_no , email) values (:name , :occupation ,:mobile_no  ,:email)";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
':name'=> $_POST['name'],
':occupation'=> $_POST['occupation'],
':mobile_no'=> $_POST['mobile_no'],
':email'=> $_POST['email']));

}
      if($stmt->execute() != 0){
      echo '<span style ="color:green;">Record Inserted</span>';
    }
  ?>
  <h3> List of registered participants for seminars: </n></h3>
 <form method="post">
  <p>Name: <input type="text" name="name"></p>
  <p>Occupation: <input type="text" name="occupation"></p>
 <p>Mobile No: <input type="text" name="mobile_no"></p>
  <p>Email: <input type="text" name="email"></p>

  <input type="submit" value="adding participants">      <input type="submit" name="cancel" value="Logout">
  </form>

</body>
</html>
