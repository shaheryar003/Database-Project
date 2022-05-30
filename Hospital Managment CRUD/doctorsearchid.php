<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Courses</title>
</head>
<body>

<div class="container">
    <h4>Doctor Records</h4>

    <form action="doctorsearchid.php" method="post">
        <span>Search Doctor Records</span> <br>
        <input type="text" name="doctor_id">
        <input type="submit" class="btn btn-info" value="Search">
        <a href="index.php" class="btn btn-info">Home</a>

    </form>

    <?php
    $username = 'root';
    $password = '';
    // Check connection
    try {
        $conn = new PDO("mysql:host=localhost;dbname=hospital", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


if (isset($_POST['doctor_id'])) {

    $doctor_id = trim($_POST['doctor_id']);

        // with prepared statement
        $query_1 = $conn->prepare('
        select doctor_id,name,qualification from doctor 
        where doctor_id = ? limit 1');
        $query_1->execute([$doctor_id]);   
}


    
    // print_r($query_1);
    $result   = $query_1->fetchAll(PDO::FETCH_ASSOC);
        // print_r($result);

    ?>
     <table class="table mt-3">
            <thead>
            <th>DOCTOR ID</th>
            <th>DOCTOR NAME</th>
            <th>QUALIFICATION</th>
     
            </thead>
            <tbody>
            <?php
            foreach ($result as $value){

                
                
                echo '<tr>
                <td>'.$value["doctor_id"].'</td>
                <td>'.$value["name"].'</td>
                <td>'.$value["qualification"].'</td>
           
                </tr>';
                
            }
           
            ?>

            </tbody>
        </table>

    <?php
     if(empty($result))
     echo 'No Record Found';


    

        ?>

     


</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- <script>
    console.lo
    </script> -->

</body>
</html>