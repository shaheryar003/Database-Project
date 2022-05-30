
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




$patient_id = $_GET['patient_id'];
$phone_number= $_GET['phone_number'];




  
    $query_1= $conn->prepare(   "INSERT INTO patient_information VALUES (?, ?)");
    $query_1->execute([$patient_id,$phone_number]);


echo '<br>';
echo 'Your form has been submitted successfully';
echo '<a href="./index.php">Click here to go back to main page</a>';

?>



