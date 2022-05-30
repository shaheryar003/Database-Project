<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Nurse - DATABSE PROJECT</title>
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
      <link href="./nurse.css" rel="stylesheet" />

      <div class="nurse-container">
        <form action="nursereg.php" method="GET">
          <select name="room_id" required class="nurse-select">
            <option value="Room ID" selected>Room ID</option>
            <?php
            include "config.php";  // Using database connection file here
            $row = mysqli_query($link, "SELECT room_id from ward");  // Use select query here 
    
            while($product_categoty = mysqli_fetch_array($row))
            {
              echo "<option value='". $product_categoty['room_id'] ."'>" .$product_categoty['room_id'] ."</option>";  // displaying data in option menu
            }	
        ?> 
          </select>
          <span class="nurse-text">ROOM ID</span>
          <span class="nurse-text1">NURSE ID</span>
          <span class="nurse-text2"><span>NAME</span></span>
          <button type="submit" class="nurse-button button">INSERT</button>
          <input
            type="text"
            name="nurse_id"
            enctype="YYYY-MM-DD"
            required
            placeholder="Nurse ID"
            class="nurse-textinput input"
          />
          <input
            type="text"
            name="name"
            enctype="YYYY-MM-DD"
            required
            placeholder="Nurse Name"
            class="nurse-textinput1 input"
          />
        </form>
        <div class="nurse-container1">
        <a href="index.php" class="nurse-button1 button">Patient</a>
          
          <a href="patientinformation.php" class="nurse-navlink button">
            Patient Information
          </a>
          <a href="inpatient.php" class="nurse-navlink01 button">In Patient</a>
          <a href="outpatient.php" class="nurse-navlink02 button">
            Out Patient
          </a>
          <a href="doctor-registration.php" class="nurse-navlink03 button">
            Doctor Registatrion
          </a>
          <a href="nurse.php" class="nurse-navlink04 button">
            Nurse Assignment
          </a>
          <a href="ward.php" class="nurse-navlink05 button">Wards</a>
          <a href="prescription.php" class="nurse-navlink06 button">
            Prescription
          </a>
          <a href="medicine.php" class="nurse-navlink07 button">Medicine</a>
          <a href="medical-test.php" class="nurse-navlink08 button">
            Medical Test
          </a>
          <a href="examine.php" class="nurse-navlink09 button">Examination</a>
          <a href="bill.php" class="nurse-navlink10 button">Bill</a>
          <a href="search.php" class="nurse-navlink10 button">SEARCH</a>
          <a href="doctor-update.php" class="nurse-navlink10 button">Update Doctor</a>
            <a href="updatepatient.php" class="nurse-navlink10 button">Update Patient</a>
        </div>
      </div>
    </div>
  </body>
</html>
