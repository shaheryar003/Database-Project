<!DOCTYPE html>

<html lang="en">
  <head>
    <title>MedicalTest - DATABSE PROJECT</title>
    <div class="medical-test-container1">
    <a href="index.php" class=class="medical-test-button1 button"</a>
          
            <a
              href="patientinformation.php"
              class="medical-test-navlink button"
            >
              Patient Information
            </a>
            <a href="inpatient.php" class="medical-test-navlink01 button">
              In Patient
            </a>
            <a href="outpatient.php" class="medical-test-navlink02 button">
              Out Patient
            </a>
            <a
              href="doctor-registration.php"
              class="medical-test-navlink03 button"
            >
              Doctor Registatrion
            </a>
            <a href="nurse.php" class="medical-test-navlink04 button">
              Nurse Assignment
            </a>
            <a href="ward.php" class="medical-test-navlink05 button">Wards</a>
            <a href="prescription.php" class="medical-test-navlink06 button">
              Prescription
            </a>
            <a href="medicine.php" class="medical-test-navlink07 button">
              Medicine
            </a>
            <a href="medical-test.php" class="medical-test-navlink08 button">
              Medical Test
            </a>
            <a href="examine.php" class="medical-test-navlink09 button">
              Examination
            </a>
            <a href="bill.php" class="medical-test-navlink10 button">Bill</a>
            <a href="search.php" class="medical-test-navlink10 button">SEARCH</a>
            <a href="doctor-update.php" class="medical-test-navlink10 button">Update Doctor</a>
            <a href="updatepatient.php" class="medical-test-navlink10 button">Update Patient</a>
          </div>
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
      <link href="./medical-test.css" rel="stylesheet" />

      <div class="medical-test-container">
        <form action="medicaltestreg.php" method="GET">
          <input
            type="text"
            name="test_id"
            required
            placeholder="Test ID"
            class="medical-test-input input"
          />
          <input
            type="text"
            name="test_name"
            required
            placeholder="Test Name"
            class="medical-test-textinput input"
          />
          <input
            type="text"
            name="test_date"
            required
            placeholder="Test Date (YYYY-MM-DD)"
            class="medical-test-textinput1 input"
          />
          <h2 class="medical-test-heading"><span>DOCOTR ID</span></h2>
          <h2 class="medical-test-heading1"><span>PATIENT ID</span></h2>
          <h2 class="medical-test-heading2"><span>TEST NAME</span></h2>
          <h2 class="medical-test-heading3">TEST ID</h2>
          <h2 class="medical-test-heading4"><span>TEST DATE</span></h2>
          <button type="submit" class="medical-test-button button">
            INSERT
          </button>
          <select name="patient_id" required class="medical-test-select">
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
          <select name="doctor_id" required class="medical-test-select1">
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
          
        </form>
      </div>
    </div>
  </body>
</html>
