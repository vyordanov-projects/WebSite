<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

  <body>
    <?php
    include 'includes/header.php';
    showHeader($pageName);
    ?>
    <section class="section-3">
      <div class="row title-info">
        <h1>Beginner</h1>
      </div>
      <div class="row">
        <h3>My knowledge in software</h3>
      </div>
      <div class="row skill-format">
        <div class="col span-1-of-2">
          <p class="skills">html &amp; Css </p>
        </div>
        <div class="col span-1-of-2 line1">
        </div>
      </div>
      <div class="row skill-format">
        <div class="col span-1-of-2">
          <p class="skills">Java</p>
        </div>
        <div class="col span-1-of-2 line2">
        </div>
      </div>
      <div class="row skill-format">
        <div class="col span-1-of-2">
          <p class="skills">JavaScript</p>
        </div>
        <div class="col span-1-of-2 line3">
        </div>
      </div>
      <div class="row skill-format">
        <div class="col span-1-of-2">
          <p class="skills">Bootstrap</p>
        </div>
        <div class="col span-1-of-2 line4">
        </div>
      </div>
      <div class="row skill-format">
        <div class="col span-1-of-2">
          <p class="skills">Jquery</p>
        </div>
        <div class="col span-1-of-2 line5">
        </div>
      </div>
    </section>
    <section class="section-4">
      <div class="row">
        <div class="col span-1-of-2">

          <h2 class="company">Company-2 <br> 2012-2014</h2>
          <p class=" para-1 par-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
        </div>
        <div class="col span-1-of-2 ">
          <h2 class="company">Company-1 <br>2009-2012</h2>
          <p class="par-1">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.Cum sociis natoque penatibus et magnis dis parturient montes,
            nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-2">

          <h2 class="company">Company-4 <br> 2017-2020</h2>
          <p class=" para-1 par-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
        </div>
        <div class="col span-1-of-2 ">
          <h2 class="company">Company-3 <br>2014-2017</h2>
          <p class="par-1">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.Cum sociis natoque penatibus et magnis dis parturient montes,
            nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
      </div>
    </section>

  <?php include 'includes/footer.php';?>


    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="assets/js/myScript.js"></script>
  </body>

</html>
