<html>
<head>
<title>About US</title>
<style>
/* Style the header */
.header {
  background-color: #02355e;
  padding: 20px;
  text-align: center;
  color: white;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  border: 2px solid green;
  background-color: #0c1833;
  
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #02355e;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
/* Style the footer */
.footer {
  color: white;
  background-color: #02355e;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>
<div class="about-section">
  <h1>About Us</h1>
  <p>Ilma University is the supremacy of higher education recognized by HEC as a Chartered university. It has diverse and accredited undergraduate, graduate and postgraduate programs. The interdisciplinary and integrative Management Sciences, Computer Science, Science & Technology and Media & Design Faculties stratified for value addition inspire the ingenuity in the students it instructs.</p>
</div>
<div class="navbar">
  <a href="form.php">Home</a>
  <a href="contact.php">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">About 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">About University</a>
      <a href="#">About Programs</a>
      <a href="about.php">About Us</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="form.php">Register</a>
      <a href="login.php">Login</a>
    </div>
  </div>
  </div>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/kashan2.jpg" alt="Kashan" style="width:100%">
      <div class="container">
        <h2>Abdullah Khan</h2>
        <p class="title">Art Designer</p>
        <p>My name is Abdullah Khan and I have the good fortune of being Judy’s partner in Opportunity Works. Since you all have heard about me from Judy, I thought I would use this opportunity to introduce myself. My professional career has mostly been in public service. Until recently, I was the executive director of the Florida state agency that serves individuals with developmental disabilities. Prior to that, I worked for 19 years as professional staff to the Florida House of Representatives in the Appropriations Committee.</p>
        <p>ak123@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/kashan.gif" alt="Abdullah" style="width:100%">
      <div class="container">
        <h2>Kashan Qazi</h2>
        <p class="title">CEO & Founder</p>
        <p>My name is <b>Kashan Qazi</b> and I have the good fortune of being Judy’s partner in Opportunity Works. Since you all have heard about me from Judy, I thought I would use this opportunity to introduce myself. My professional career has mostly been in public service. Until recently, I was the executive director of the Florida state agency that serves individuals with developmental disabilities. Prior to that, I worked for 19 years as professional staff to the Florida House of Representatives in the Appropriations Committee.</p>
        <p>kashanqazi777@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/kashan3.jpg" alt="Noman" style="width:100%">
      <div class="container">
        <h2>Noman</h2>
        <p class="title">Designer</p>
        <p>My name is Noman Ali Akbar and I have the good fortune of being Judy’s partner in Opportunity Works. Since you all have heard about me from Judy, I thought I would use this opportunity to introduce myself. My professional career has mostly been in public service. Until recently, I was the executive director of the Florida state agency that serves individuals with developmental disabilities. Prior to that, I worked for 19 years as professional staff to the Florida House of Representatives in the Appropriations Committee.</p>
        <p>noman123@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<!-- FOOTER -->
<div class="footer">
  <p>Developed by Kashan Qazi</p>
</div>
</body>
</html>