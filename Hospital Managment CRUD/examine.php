<!DOCTYPE html>

<html lang="en">
  <head>
    <title>examine - DATABSE PROJECT</title>
    <meta property="og:title" content="examine - DATABSE PROJECT" />
    <meta property="og:title" content="DoctorRegistration - DATABSE PROJECT" />
    <meta property="og:title" content="outpatient - DATABSE PROJECT" />
    <meta property="og:title" content="patientinformation - DATABSE PROJECT" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./examine.css" rel="stylesheet" />

      <div class="examine-container">
        <form action="examinereg.php" method="GET">
          <select name="doctor_id" required class="examine-select">
            <option value="Doctor ID" selected>Doctor ID</option>
            <?php
            include "config.php";  // Using database connection file here
            $row = mysqli_query($link, "SELECT doctor_id from doctor");  // Use select query here 
    
            while($product_categoty = mysqli_fetch_array($row))
            {
              echo "<option value='". $product_categoty['doctor_id'] ."'>" .$product_categoty['doctor_id'] ."</option>";  // displaying data in option menu
            }	
        ?>  
          </select>
          <select name="patient_id" required class="examine-select1">
            <option value="Patient ID" selected>Patient ID</option>
            <?php
            include "config.php";  // Using database connection file here
            $row = mysqli_query($link, "SELECT patient_id from patient");  // Use select query here 
    
            while($product_categoty = mysqli_fetch_array($row))
            {
              echo "<option value='". $product_categoty['patient_id'] ."'>" .$product_categoty['patient_id'] ."</option>";  // displaying data in option menu
            }	
        ?>  
          </select>
          <span class="examine-text">PATIENT ID</span>
          <span class="examine-text1">DOCTOR ID</span>
          <button type="submit" class="examine-button button">INSERT</button>
        </form>
        <div class="examine-container1">
        <a href="index.php" class="examine-button1 button">Patient</a>
         
          <a href="patientinformation.php" class="examine-navlink button">
            Patient Information
          </a>
          <a href="inpatient.php" class="examine-navlink01 button">
            In Patient
          </a>
          <a href="outpatient.php" class="examine-navlink02 button">
            Out Patient
          </a>
          <a href="doctor-registration.php" class="examine-navlink03 button">
            Doctor Registatrion
          </a>
          <a href="nurse.php" class="examine-navlink04 button">
            Nurse Assignment
          </a>
          <a href="ward.php" class="examine-navlink05 button">Wards</a>
          <a href="prescription.php" class="examine-navlink06 button">
            Prescription
          </a>
          <a href="medicine.php" class="examine-navlink07 button">Medicine</a>
          <a href="medical-test.php" class="examine-navlink08 button">
            Medical Test
          </a>
          <a href="examine.php" class="examine-navlink09 button">
            Examination
          </a>
          <a href="bill.php" class="examine-navlink10 button">Bill</a>
          <a href="search.php" class="examine-navlink10 button">SEARCH</a>
          <a href="doctor-update.php" class="examine-navlink10 button">Update Doctor</a>
            <a href="updatepatient.php" class="examine-navlink10 button">Update Patient</a>
        </div>
      </div>
    </div>
  </body>
</html>
