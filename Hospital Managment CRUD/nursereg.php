
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




$nurse_id = $_GET['nurse_id'];
$name= $_GET['name'];
$room_id=$_GET['room_id'];


  
    $query_1= $conn->prepare(   "INSERT INTO nurse VALUES (?, ?, ?)");
    $query_1->execute([$nurse_id,$name,$room_id]);


echo '<br>';
echo 'Your form has been submitted successfully';
echo '<a href="./index.php">Click here to go back to main page</a>';

?>



