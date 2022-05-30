<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Bill - DATABSE PROJECT</title>
    <div class="bill-container1">
    <a href="index.php" class="bill-button1 button">Patient</a>
           
            <a href="patientinformation.php" class="bill-navlink button">
              Patient Information
            </a>
            <a href="inpatient.php" class="bill-navlink01 button">
              In Patient
            </a>
            <a href="outpatient.php" class="bill-navlink02 button">
              Out Patient
            </a>
            <a href="doctor-registration.php" class="bill-navlink03 button">
              Doctor Registatrion
            </a>
            <a href="nurse.php" class="bill-navlink04 button">
              Nurse Assignment
            </a>
            <a href="ward.php" class="bill-navlink05 button">Wards</a>
            <a href="prescription.php" class="bill-navlink06 button">
              Prescription
            </a>
            <a href="medicine.php" class="bill-navlink07 button">Medicine</a>
            <a href="medical-test.php" class="bill-navlink08 button">
              Medical Test
            </a>
            <a href="examine.php" class="bill-navlink09 button">Examination</a>
            <a href="bill.php" class="bill-navlink10 button">Bill</a>
            <a href="search.php" class="home-navlink11 button">SEARCH</a>
            
          <a href="doctor-update.php" class="home-navlink11 button">Update Doctor</a>
            <a href="updatepatient.php" class="home-navlink11 button">Update Patient</a>
          </div>
    <meta property="og:title" content="Bill - DATABSE PROJECT" />
    <meta property="og:title" content="Nurse - DATABSE PROJECT" />
    <meta property="og:title" content="Ward - DATABSE PROJECT" />
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
      <link href="./bill.css" rel="stylesheet" />

      <div class="bill-container">
        <form action="billreg.php" method="GET">
          <input
            type="text"
            name="bill_id"
            required
            placeholder="Bill ID"
            class="bill-input input"
          />
          <input
            type="text"
            name="test_charge"
            placeholder="TEST CHARGES"
            class="bill-textinput input"
          />
          <input
            type="text"
            name="room_charge"
            required
            placeholder="Room Charges"
            class="bill-textinput1 input"
          />
          <input
            type="text"
            name="doctor_fee"
            required
            placeholder="DR CHARGES"
            class="bill-textinput2 input"
          />
          <h2 class="bill-heading"><span>ROOM CHARGES</span></h2>
          <h2 class="bill-heading1"><span>BILL ID</span></h2>
          <h2 class="bill-heading2"><span>TEST CHARGES</span></h2>
          <h2 class="bill-heading3"><span>DOCTOR FEE</span></h2>
          <h2 class="bill-heading4"><span>PATIENT ID</span></h2>
          <button type="submit" class="bill-button button">INSERT</button>
          <select name="patient_id" required class="bill-select">
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
          
        </form>
      </div>
    </div>
  </body>
</html>
