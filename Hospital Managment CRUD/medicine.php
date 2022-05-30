<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Medicine - DATABSE PROJECT</title>
    <meta property="og:title" content="Medicine - DATABSE PROJECT" />
    <meta property="og:title" content="Prescription - DATABSE PROJECT" />
    <meta property="og:title" content="MedicalTest - DATABSE PROJECT" />
    <meta property="og:title" content="inpatient - DATABSE PROJECT" />
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
      <link href="./medicine.css" rel="stylesheet" />

      <div class="medicine-container">
        <form action="medicinereg.php" method="GET">
          <select name="prescription_id" required class="medicine-select">
            <option value="Prescription ID" selected>Prescription ID</option>
            <?php
            include "config.php";  // Using database connection file here
            $row = mysqli_query($link, "SELECT prescription_id from prescription");  // Use select query here 
    
            while($product_categoty = mysqli_fetch_array($row))
            {
              echo "<option value='". $product_categoty['prescription_id'] ."'>" .$product_categoty['prescription_id'] ."</option>";  // displaying data in option menu
            }	
        ?>  
          </select>
          <span class="medicine-text">PRESCRIPTION ID</span>
          <span class="medicine-text1">MEDICINE NAME</span>
          <input
            type="text"
            name="medicine_name"
            enctype="YYYY-MM-DD"
            required
            placeholder="Medicine Name"
            class="medicine-textinput input"
          />
          <button type="submit" class="medicine-button button">INSERT</button>
        </form>
        <div class="medicine-container1">
        <a href="index.php" class="medicine-button1 button">Patient</a>
          <a href="patientinformation.php" class="medicine-navlink button">
            Patient Information
          </a>
          <a href="inpatient.php" class="medicine-navlink01 button">
            In Patient
          </a>
          <a href="outpatient.php" class="medicine-navlink02 button">
            Out Patient
          </a>
          <a href="doctor-registration.php" class="medicine-navlink03 button">
            Doctor Registatrion
          </a>
          <a href="nurse.php" class="medicine-navlink04 button">
            Nurse Assignment
          </a>
          <a href="ward.php" class="medicine-navlink05 button">Wards</a>
          <a href="prescription.php" class="medicine-navlink06 button">
            Prescription
          </a>
          <a href="medicine.php" class="medicine-navlink07 button">Medicine</a>
          <a href="medical-test.php" class="medicine-navlink08 button">
            Medical Test
          </a>
          <a href="examine.php" class="medicine-navlink09 button">
            Examination
          </a>
          <a href="bill.php" class="medicine-navlink10 button">Bill</a>
          <a href="search.php" class="medicine-navlink10 button">SEARCH</a>
          <a href="doctor-update.php" class="medicine-navlink10 button">Update Doctor</a>
            <a href="updatepatient.php" class="medicine-navlink10 button">Update Patient</a>
        </div>
      </div>
    </div>
  </body>
</html>
