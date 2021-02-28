<?php
include_once 'header.php';
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
  background-color: #27ae5f;
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
  color: white;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

<body>  
  <div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="vyan1.jpg" alt="Dwi Oktaviyanti" style="width:100%">
      <div class="container">
        <h2>Dwi Oktaviyanti</h2>
        <p class="title">5302419001</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>@students.unnes.ac.id</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="fika1.jpg" alt="Fika Amalia" style="width:100%">
      <div class="container">
        <h2>Fika Amalia</h2>
        <p class="title">5302419002</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>@students.unnes.ac.id</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="frans1.jpg" alt="Frans Rizky Nugroho " style="width:100%">
      <div class="container">
        <h2>Frans Rizky Nugroho</h2>
        <p class="title">5302419019</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>@students.unnes.ac.id</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="bimad.jpg" alt="Bima Dewantoro" style="width:100%">
      <div class="container">
        <h2>Bima Dewantoro</h2>
        <p class="title">5302419031</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>@students.unnes.ac.id</p>
      </div>
    </div>
  </div>

    <div class="column">
    <div class="card">
      <img src="puan1.jpg" alt="Puan Nellysha Rianda" style="width:100%">
      <div class="container">
        <h2>Puan Nellysha Rianda</h2>
        <p class="title">5302419033</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>@students.unnes.ac.id</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="bimas1.jpg" alt="Bima Sanjaya" style="width:100%">
      <div class="container">
        <h2>Bima Sanjaya</h2>
        <p class="title">5302419040</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>@students.unnes.ac.id</p>
      </div>
    </div>
  </div>
</body>
<?php
include_once 'footer.php';
?>
</html>
