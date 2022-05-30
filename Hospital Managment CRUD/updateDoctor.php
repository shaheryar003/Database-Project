
<?php





$username = "root";
$password = "";
try {
$conn = new PDO("mysql:host=localhost;dbname=hospital", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
// echo 'HI';
echo '<pre>';
// print_r($_GET);
//var_dump($_GET);

} 

catch(PDOException $e) {
echo "Connection failed: " . $e->GETMessage();
}



$doctor_id = $_GET['doctor_id'];
$name= $_GET['name'];
$qualification= $_GET['qualification'];


$sql = "UPDATE doctor set name = ? , qualification = ? WHERE doctor_id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$name,$qualification,$doctor_id]);

  
 
    


echo '<br>';
echo 'Your form has been submitted successfully';
echo '<a href="./index.php">Click here to go back to main page</a>';

?> 



