<?php


if (isset($_GET['id']))
{
include($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-CORP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   body { background: #161314 !important; }

.navbar-default{background-color:#161314;border-color:#161314} /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
</head>
<body>
	<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome to E-Corp</a>
    </div>
    <ul class="nav navbar-nav navbar-right navbar-default">
      <li><a href="#page1"><strong>Page 1</strong></a></li>
      <li><a href="#page2"><strong>Page 2</strong></a></li>
       <li><a href="#page3"><strong>Page 3</strong></a></li>
      <li><a href="#page4"><strong>Page 4</strong></a></li>
      <li><a href="#page5"><strong>Page 5</strong></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</div></nav>
    <img src="https://i.redditmedia.com/t8Ms3hgEo0-R40iFCjn3ViPdZygyLssNGxqt7iDybx4.jpg?s=8b0a548c4fd53dace237ea0fd9c70090" class="img-responsive  center-block" alt="indeximage" width="1500" height="480"> 
</br>
<div class="row">
  <div class="col-sm-4 well"><img src="https://fsa.zobj.net/crop.php?r=77VEpzZQjkV-q5gtvRx2IjWFJdzJk7BafvUDbw1GLML4doKbpLRg7gmI0MV5PMIYcd0Otz6lqlmJ-GpjIndFoHj9675pbShBjsqw7sSu5yatoiI_ULemtUwEZCfEqUSmC2m9L2XCv9EcfhZ2" class="img-circle center-block" alt="Cinque Terre" width="200" height="200">
<h2>Heading 1</h2>Lorem ipsum dolor sit amet, et mea dolor quidam saperet. Has eius solum disputationi ut, prima modus oratio his eu. Vim ut mucius molestiae instructior, no mundi graeco sed. Ad primis dictas eloquentiam vis, quot natum blandit mel et.

Ea vidit hendrerit has. Ea paulo graeci duo, ut pri inani scaevola. Nec vitae laoreet ei, vel enim postea id. Inani sententiae repudiandae eu vis, ei quot quando nostro vel. Qui ne veritus admodum splendide. Ex pro nostro latine, sit semper commodo corpora eu.</div>
  <div class="col-sm-4 well"><img src="https://fsa.zobj.net/crop.php?r=77VEpzZQjkV-q5gtvRx2IjWFJdzJk7BafvUDbw1GLML4doKbpLRg7gmI0MV5PMIYcd0Otz6lqlmJ-GpjIndFoHj9675pbShBjsqw7sSu5yatoiI_ULemtUwEZCfEqUSmC2m9L2XCv9EcfhZ2" class="img-circle center-block" alt="Cinque Terre" width="200" height="200"><h2>Heading 2</h2>Lorem ipsum dolor sit amet, et mea dolor quidam saperet. Has eius solum disputationi ut, prima modus oratio his eu. Vim ut mucius molestiae instructior, no mundi graeco sed. Ad primis dictas eloquentiam vis, quot natum blandit mel et.

Ea vidit hendrerit has. Ea paulo graeci duo, ut pri inani scaevola. Nec vitae laoreet ei, vel enim postea id. Inani sententiae repudiandae eu vis, ei quot quando nostro vel. Qui ne veritus admodum splendide. Ex pro nostro latine, sit semper commodo corpora eu.</div>
  <div class="col-sm-4 well"><img src="https://fsa.zobj.net/crop.php?r=77VEpzZQjkV-q5gtvRx2IjWFJdzJk7BafvUDbw1GLML4doKbpLRg7gmI0MV5PMIYcd0Otz6lqlmJ-GpjIndFoHj9675pbShBjsqw7sSu5yatoiI_ULemtUwEZCfEqUSmC2m9L2XCv9EcfhZ2" class="img-circle center-block" alt="Cinque Terre" width="200" height="200"><h2>Heading 3</h2>Lorem ipsum dolor sit amet, et mea dolor quidam saperet. Has eius solum disputationi ut, prima modus oratio his eu. Vim ut mucius molestiae instructior, no mundi graeco sed. Ad primis dictas eloquentiam vis, quot natum blandit mel et.

Ea vidit hendrerit has. Ea paulo graeci duo, ut pri inani scaevola. Nec vitae laoreet ei, vel enim postea id. Inani sententiae repudiandae eu vis, ei quot quando nostro vel. Qui ne veritus admodum splendide. Ex pro nostro latine, sit semper commodo corpora eu.</div> 
</div>
</div>
</div></body>

<main role="main" class="inner cover">
        <h1 class="cover-heading">Coming soon</h1>
        <p class="lead">
          <?php
            if (isset($_GET['id']))
          {
          echo $message;
          }
          else
          {
            ?>

            Next opening of the largest vibranium market. The products come directly from the wakanda. stay tuned!
            <?php
          }
?>
        </p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
      </main>