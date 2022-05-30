
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
$name= $_GET['name'];
$date_of_birth= $_GET['date_of_birth'];
$gender= $_GET['gender'];
$disease= $_GET['disease'];
$checkup_date=$_GET['checkup_date'];
$status="1";


    
  
    $query_1= $conn->prepare(   "INSERT INTO patient VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query_1->execute([$patient_id,$name,$date_of_birth,$gender,$disease,$checkup_date ,  $status]);


echo '<br>';
echo 'Your form has been submitted successfully';
echo '<a href="./index.php">Click here to go back to main page</a>';

?>



