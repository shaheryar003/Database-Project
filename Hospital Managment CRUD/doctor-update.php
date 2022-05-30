<!DOCTYPE html>

<html lang="en">
  <head>
  <div class="doctor-update-container1">
            <button class="doctor-update-button1 button">Patient</button>
            <a
              href="patientinformation.php"
              class="doctor-update-navlink button"
            >
              Patient Information
            </a>
            <a href="inpatient.php" class="doctor-update-navlink01 button">
              In Patient
            </a>
            <a href="outpatient.php" class="doctor-update-navlink02 button">
              Out Patient
            </a>
            <a
              href="doctor-registration.php"
              class="doctor-update-navlink010 button"
            >
              Doctor Registatrion
            </a>
            <a href="nurse.php" class="doctor-update-navlink04 button">
              Nurse Assignment
            </a>
            <a href="ward.php" class="doctor-update-navlink05 button">Wards</a>
            <a href="prescription.php" class="doctor-update-navlink06 button">
              Prescription
            </a>
            <a href="medicine.php" class="doctor-update-navlink07 button">
              Medicine
            </a>
            <a href="medical-test.php" class="doctor-update-navlink08 button">
              Medical Test
            </a>
            <a href="examine.php" class="doctor-update-navlink09 button">
              Examination
            </a>
            <a href="bill.php" class="doctor-update-navlink10 button">Bill</a>
            <a href="doctor-update.php" class="doctor-update-navlink03 button">Update Doctor</a>
            <a href="updatepatient.php" class="doctor-update-navlink10 button">Update Patient</a>
          </div>
    <title>Doctor Update - DATABSE PROJECT</title>
    <meta property="og:title" content="Doctor Update - DATABSE PROJECT" />
    <meta property="og:title" content="updatepatient - DATABSE PROJECT" />
    <meta property="og:title" content="Page - DATABSE PROJECT" />
    <meta property="og:title" content="outpatient - DATABSE PROJECT" />
    <meta property="og:title" content="patientinformation - DATABSE PROJECT" />
    <meta property="og:title" content="Medicine - DATABSE PROJECT" />
    <meta property="og:title" content="examine - DATABSE PROJECT" />
    <meta property="og:title" content="Prescription - DATABSE PROJECT" />
    <meta property="og:title" content="DoctorRegistration - DATABSE PROJECT" />
    <meta property="og:title" content="search - DATABSE PROJECT" />
    <meta property="og:title" content="inpatient - DATABSE PROJECT" />
    <meta property="og:title" content="Nurse - DATABSE PROJECT" />
    <meta property="og:title" content="Bill - DATABSE PROJECT" />
    <meta property="og:title" content="Ward - DATABSE PROJECT" />
    <meta property="og:title" content="MedicalTest - DATABSE PROJECT" />

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
      <link href="./doctor-update.css" rel="stylesheet" />

      <div class="doctor-update-container">
        <form action="updateDoctor.php" method="GET">
          <input
            type="text"
            name="doctor_id"
            required
            placeholder="Dr ID"
            class="doctor-update-input input"
          />
          <input
            type="text"
            name="qualification"
            placeholder="Qulaification"
            class="doctor-update-textinput input"
          />
          <input
            type="text"
            name="name"
            required
            placeholder="Dr Name"
            class="doctor-update-textinput1 input"
          />
          <h2 class="doctor-update-heading"><span>NAME</span></h2>
          <h2 class="doctor-update-heading1"><span>ID</span></h2>
          <h2 class="doctor-update-heading2"><span>Qualification</span></h2>
          <button type="submit" class="doctor-update-button button">
            <span>
              <span>UPDATE</span>
              <span></span>
            </span>
          </button>
         
        </form>
      </div>
    </div>
  </body>
</html>
