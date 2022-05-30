<!DOCTYPE html>

<html lang="en">
  <head>
    <title>DATABSE PROJECT</title>
    <meta property="og:title" content="DATABSE PROJECT" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <link href="./home.css" rel="stylesheet" />

      <div class="home-container">
        <div class="home-container1">
          <a href="index.php" class="home-navlink button">Patient</a>
          <a href="patientinformation.php" class="home-navlink01 button">
            Patient Information
          </a>
          <a href="inpatient.php" class="home-navlink02 button">In Patient</a>
          <a href="outpatient.php" class="home-navlink03 button">
            Out Patient
          </a>
          <a href="doctor-registration.php" class="home-navlink04 button">
            Doctor Registatrion
          </a>
          <a href="nurse.php" class="home-navlink05 button">
            Nurse Assignment
          </a>
          <a href="ward.php" class="home-navlink06 button">Wards</a>
          <a href="prescription.php" class="home-navlink07 button">
            Prescription
          </a>
          <a href="medicine.php" class="home-navlink08 button">Medicine</a>
          <a href="medical-test.php" class="home-navlink09 button">
            Medical Test
          </a>
          <a href="examine.php" class="home-navlink10 button">Examination</a>
          <a href="bill.php" class="home-navlink11 button">Bill</a>
          <a href="search.php" class="home-navlink11 button">SEARCH</a>
          <a href="doctor-update.php" class="home-navlink11 button">Update Doctor</a>
            <a href="updatepatient.php" class="home-navlink11 button">Update Patient</a>
        </div>
        <form action="homereg.php" method="GET">
          <input
            type="text"
            name="patient_id"
            required
            placeholder="ID"
            class="home-input input"
          />
          <input
            type="text"
            name="date_of_birth"
            placeholder="DOB"
            class="home-textinput input"
          />
          <input
            type="text"
            name="name"
            required
            placeholder="Name"
            class="home-textinput1 input"
          />
          <input
            type="text"
            name="checkup_date"
            required
            placeholder="Checkup Date (YYYY-MM-DD)"
            class="home-textinput2 input"
          />
          <input
            type="text"
            name="disease"
            required
            placeholder="Disease"
            class="home-textinput3 input"
          />
          <input
            type="text"
            name="gender"
            required
            placeholder="Gender"
            class="home-textinput4 input"
          />
          <h2 class="home-heading"><span>NAME</span></h2>
          <h2 class="home-heading1"><span>ID</span></h2>
          <h2 class="home-heading2"><span>DOB</span></h2>
          <h2 class="home-heading3"><span>Gender</span></h2>
          <h2 class="home-heading4"><span>Disease</span></h2>
          <h2 class="home-heading5"><span>Checkup Date</span></h2>
          <button type="submit" class="home-button button">INSERT</button>
         
        </form>
        
      </div>
    </div>
  </body>
</html>
