
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




$bill_id = $_GET['bill_id'];
$test_charge= $_GET['test_charge'];
$room_charge= $_GET['room_charge'];
$doctor_fee= $_GET['doctor_fee'];
$patient_id= $_GET['patient_id'];


  
    $query_1= $conn->prepare(   "INSERT INTO bill VALUES (?,?, ?,?,?)");
    $query_1->execute([$bill_id,$room_charge,$test_charge,$doctor_fee,$patient_id]);


echo '<br>';
echo 'Your form has been submitted successfully';
echo '<a href="./index.php">Click here to go back to main page</a>';

?>



