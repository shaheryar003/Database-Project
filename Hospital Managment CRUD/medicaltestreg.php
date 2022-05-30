
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




$test_id = $_GET['test_id'];
$test_date= $_GET['test_date'];
$test_name= $_GET['test_name'];
$patient_id= $_GET['patient_id'];
$doctor_id= $_GET['doctor_id'];


  
    $query_1= $conn->prepare(   "INSERT INTO medical_test VALUES (?,?,?,?,?)");
    $query_1->execute([$test_id,$test_date,$test_name,$patient_id,$doctor_id]);


echo '<br>';
echo 'Your form has been submitted successfully';
echo '<a href="./index.php">Click here to go back to main page</a>';

?>



