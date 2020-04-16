

<?php
  $pageName = basename($_SERVER['REQUEST_URI'], '.php');


function showHeader($currentPage) {  ?>
<header class="header">
  <div class="row">
    <img src="assets/images/logo1.png" alt="My logo" class="logo-main">
    <ul class="main-nav js--main-nav">
      <li class="nu"><a href="portfolio.php">My Portfolio</a></li>
      <li><a href="about_me.php">About me</a></li>
      <li class="aim"><a href="index.php">Home</a></li>
        <li class="aim"><a href="todo.php">todo list</a></li>
    </ul>
    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
  </div>

  <?php if ($currentPage === 'index') { ?>

  <div class="title-info">
    <h1>Hello everyone.<br>This is my new Website. </h1>
  </div>
  <div class="row">
    <h3>Praesent tristique est a massa hendrerit, sit amet consequat nibh dictum. </h3>
    <p class="par-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor eget mauris at imperdiet....
      Etiam tincidunt augue eget diam dictum, et molestie nisi ullamcorper. Phasellus vitae rutrum velit.
      Donec fermentum, ante et ullamcorper consequat, risus mauris laoreet urna, et volutpat massa enim ac purus.
      Sed dictum luctus magna id varius. Sed non lacinia sapien. </p>
  </div>

  <?php } elseif ($currentPage === 'portfolio') { ?>

  <div class="row title-info">
    <h1>I am Vladislav Yordanov</h1>
  </div>
  <div class="row small-h">
    <h3>A Future Web Developer</h3>
  </div>
  <div class="row par-1">
    Nam mollis eleifend quam, at ultricies lorem tincidunt at. Proin in lobortis leo. Pellentesque viverra condimentum pharetra.
    Sed ipsum neque, dictum a rhoncus quis, dictum lacinia neque. Integer quis dolor id arcu eleifend efficitur vel et mauris.
    Fusce sapien nibh, venenatis eget volutpat et, elementum sed ipsum. Morbi tristique mauris in sodales venenatis. Duis mollis
    nisl et posuere porttitor.
  </div>
<?php } elseif ($currentPage === 'about_me') { ?>
  <div class="title-info">
        <h1> Hello everyone, My name is Vladislav <br> and I am going to tell you something <br> about myself.</h1>
      </div>
<?php } else {

} ?>
</header>
<?php
} ?>
