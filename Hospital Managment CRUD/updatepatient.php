<!DOCTYPE html>

<html lang="en">
  <head>
    <title>updatepatient - DATABSE PROJECT</title>
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
      <link href="./updatepatient.css" rel="stylesheet" />

      <div class="updatepatient-container">
        <div class="updatepatient-container1">
          <a href="index.php" class="updatepatient-navlink02 button">Patient</a>
          <a
            href="patientinformation.php"
            class="updatepatient-navlink01 button"
          >
            Patient Information
          </a>
          <a href="inpatient.php" class="updatepatient-navlink02 button">
            In Patient
          </a>
          <a href="outpatient.php" class="updatepatient-navlink03 button">
            Out Patient
          </a>
          <a
            href="doctor-registration.php"
            class="updatepatient-navlink04 button"
          >
            Doctor Registatrion
          </a>
          <a href="nurse.php" class="updatepatient-navlink05 button">
            Nurse Assignment
          </a>
          <a href="ward.php" class="updatepatient-navlink06 button">Wards</a>
          <a href="prescription.php" class="updatepatient-navlink07 button">
            Prescription
          </a>
          <a href="medicine.php" class="updatepatient-navlink08 button">
            Medicine
          </a>
          <a href="medical-test.php" class="updatepatient-navlink09 button">
            Medical Test
          </a>
          <a href="examine.php" class="updatepatient-navlink10 button">
            Examination
          </a>
          <a href="bill.php" class="updatepatient-navlink11 button">Bill</a>
          <a href="search.php" class="updatepatient-navlink12 button">
            SEARCH
          </a>
          <a href="doctor-update.php" class="updatepatient-navlink11 button">Update Doctor</a>
            <a href="updatepatient.php" class="updatepatient-navlink button">Update Patient</a>
        </div>
        <<form action="updatepatientreg.php" method="GET">>
          <input
            type="text"
            name="patient_id"
            required
            placeholder="ID"
            class="updatepatient-input input"
          />
          <input
            type="text"
            name="date_of_birth"
            placeholder="DOB"
            class="updatepatient-textinput input"
          />
          <input
            type="text"
            name="name"
            required
            placeholder="Name"
            class="updatepatient-textinput1 input"
          />
          <input
            type="text"
            name="checkup_date"
            required
            placeholder="Checkup Date (YYYY-MM-DD)"
            class="updatepatient-textinput2 input"
          />
          <input
            type="text"
            name="disease"
            required
            placeholder="Disease"
            class="updatepatient-textinput3 input"
          />
          <input
            type="text"
            name="gender"
            required
            placeholder="Gender"
            class="updatepatient-textinput4 input"
          />
          <h2 class="updatepatient-heading"><span>NAME</span></h2>
          <h2 class="updatepatient-heading1"><span>ID</span></h2>
          <h2 class="updatepatient-heading2"><span>DOB</span></h2>
          <h2 class="updatepatient-heading3"><span>Gender</span></h2>
          <h2 class="updatepatient-heading4"><span>Disease</span></h2>
          <h2 class="updatepatient-heading5"><span>Checkup Date</span></h2>
          <button type="submit" class="updatepatient-button button">
            Update
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
