<!DOCTYPE html>

<html lang="en">
  <head>
    <title>DoctorRegistration - DATABSE PROJECT</title>
    <div class="doctor-registration-container1">
    <a href="index.php" class="doctor-registration-button1 button">Patient</a>
          
            <a
              href="patientinformation.php"
              class="doctor-registration-navlink button"
            >
              Patient Information
            </a>
            <a
              href="inpatient.php"
              class="doctor-registration-navlink01 button"
            >
              In Patient
            </a>
            <a
              href="outpatient.php"
              class="doctor-registration-navlink02 button"
            >
              Out Patient
            </a>
            <a
              href="doctor-registration.php"
              class="doctor-registration-navlink03 button"
            >
              Doctor Registatrion
            </a>
            <a href="nurse.php" class="doctor-registration-navlink04 button">
              Nurse Assignment
            </a>
            <a href="ward.php" class="doctor-registration-navlink05 button">
              Wards
            </a>
            <a
              href="prescription.php"
              class="doctor-registration-navlink06 button"
            >
              Prescription
            </a>
            <a
              href="medicine.php"
              class="doctor-registration-navlink07 button"
            >
              Medicine
            </a>
            <a
              href="medical-test.php"
              class="doctor-registration-navlink08 button"
            >
              Medical Test
            </a>
            <a href="examine.php" class="doctor-registration-navlink09 button">
              Examination
            </a>
            <a href="bill.php" class="doctor-registration-navlink10 button">
              Bill
            </a>
             
          <a href="doctor-update.php" class="doctor-registration-navlink09">Update Doctor</a>
            <a href="updatepatient.php" class="doctor-registration-navlink09">Update Patient</a>
          </div>
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
      <link href="./doctor-registration.css" rel="stylesheet" />

      <div class="doctor-registration-container">
        <form action="docreg.php" method="GET">
          <input
            type="text"
            name="doctor_id"
            required
            placeholder="Dr ID"
            class="doctor-registration-input input"
          />
          <input
            type="text"
            name="qualification"
            placeholder="Qulaification"
            class="doctor-registration-textinput input"
          />
          <input
            type="text"
            name="name"
            required
            placeholder="Dr Name"
            class="doctor-registration-textinput1 input"
          />
          <h2 class="doctor-registration-heading"><span>NAME</span></h2>
          <h2 class="doctor-registration-heading1"><span>ID</span></h2>
          <h2 class="doctor-registration-heading2">
            <span>Qualification</span>
          </h2>
          <button type="submit" class="doctor-registration-button button">
            <span>
              <span>Submit</span>
              <span></span>
            </span>
          </button>
         
        </form>
      </div>
    </div>
  </body>
  
</html>
