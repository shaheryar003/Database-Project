<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Ward - DATABSE PROJECT</title>
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
      <link href="./ward.css" rel="stylesheet" />

      <div class="ward-container">
        <form action="wardreg.php" method="GET">
          <span class="ward-text">ROOM ID</span>
          <span class="ward-text1">ROOM TYPE</span>
          <span class="ward-text2">STATUS</span>
          <input
            type="text"
            name="room_id"
            enctype="YYYY-MM-DD"
            required
            placeholder="Room ID"
            class="ward-textinput input"
          />
          <input
            type="text"
            name="status"
            enctype="YYYY-MM-DD"
            required
            placeholder="Room Status"
            class="ward-textinput1 input"
          />
          <input
            type="text"
            name="room_type"
            enctype="YYYY-MM-DD"
            required
            placeholder="Room Type"
            class="ward-textinput2 input"
          />
          <button type="submit" class="ward-button button">INSERT</button>
         </form>
        <div class="ward-container1">
        
        <a href="index.php" class="ward-button1 button">Patient</a>
          <a href="patientinformation.php" class="ward-navlink button">
            Patient Information
          </a>
          <a href="inpatient.php" class="ward-navlink01 button">In Patient</a>
          <a href="outpatient.php" class="ward-navlink02 button">
            Out Patient
          </a>
          <a href="doctor-registration.php" class="ward-navlink03 button">
            Doctor Registatrion
          </a>
          <a href="nurse.php" class="ward-navlink04 button">
            Nurse Assignment
          </a>
          <a href="ward.php" class="ward-navlink05 button">Wards</a>
          <a href="prescription.php" class="ward-navlink06 button">
            Prescription
          </a>
          <a href="medicine.php" class="ward-navlink07 button">Medicine</a>
          <a href="medical-test.php" class="ward-navlink08 button">
            Medical Test
          </a>
          <a href="examine.php" class="ward-navlink09 button">Examination</a>
          <a href="bill.php" class="ward-navlink10 button">Bill</a>
          <a href="search.php" class="ward-navlink10 button">SEARCH</a>
          <a href="doctor-update.php" class="ward-navlink10 button">Update Doctor</a>
            <a href="updatepatient.php" class="ward-navlink10 button">Update Patient</a>
        </div>
      </div>
    </div>
  </body>
</html>
