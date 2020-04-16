<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About me</title>
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>

  <body>
    <?php include 'includes/header.php';

    showHeader($pageName);
?>

      </header>
    <!--Section 1 -->

    <section class="personal__info">
      <div class="row story__header">
        <h2>So this is my story</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-2 par-2">
          <p>Hello Everyone my name is Vladislav, and I was born in a very beautiful city called Rousse.
            Rousse is in the northeastern part of my country &mdash; Bulgaria, on the right bank of the Danube, opposite
            the Romanian city of Giurgiu. And it is approximately 75km of Bucharest, Romania's capital.
            Ruse is known for its 19th- and 20th-century Neo-Baroque and Neo-Rococo architecture, which attracts many tourists.
            It is often called the Little Vienna.
          </p>
        </div>
        <div class="col span-1-of-2">
          <figure>
            <img src="assets/images/Ruse.jpg" alt="Ruse town" class="ruse-img">
          </figure>
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-2">
          <figure>
            <img src="assets/images/varna.jpg" alt="Varna" class="varna-img">
          </figure>
        </div>
        <div class="col span-1-of-2 study-place">
          <p>I study in Varna &mdash; The Technical University of Varna and I am in my third year.
            Urabitur non efficitur urna, sed ullamcorper urna. Morbi congue, nisl vitae posuere iaculis, enim dolor sagittis sem,
            et vulputate libero nisl at arcu. Quisque at pulvinar lacus. Fusce vel magna lacinia, volutpat diam id, viverra metus.
            Etiam suscipit at orci eget pulvinar. Integer viverra placerat hendrerit. Mauris ornare sodales nisi, ac hendrerit arcu laoreet nec.
            Praesent eu aliquet arcu, vel iaculis magna.</p>
        </div>
      </div>

    </section>
  <?php include 'includes/footer.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="assets/js/myScript.js"></script>
  </body>

</html>
