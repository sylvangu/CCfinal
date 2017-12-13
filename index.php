<!DOCTYPE html>
<html>
<head>
	<title>Recall - Document Your Life</title>

	<!-- STYLE -->
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

    *{
      text-decoration: none;
      text-align: center;
      color: rgb(0, 0, 0);
      background-color: rgb(232, 200, 203);
      font-family: 'Open Sans';
    }

    h1{
        font-size: 55px;
      }

    body{
        background-size: 90px;
      }

      .navigation{
        font-size: 20px;
      }

    </style>

</head>
<body>

  	<h1><a href="recall.php">RECALL</a></h1>


	<nav>

		<!--<a href="#" class="navigation"><img src="images/checkin.png" width="30px" height="30px" alt="image">  CHECK-IN</a><br><br><br>-->

   		<a href="#" class="navigation"><img src="images/text.png" width="20px" height="20px" alt="image">  TEXT</a><br><br>

		<form method="GET">
			<input type="text" name ="person">
			<button>SUBMIT</button>
		</form><br><br>

		<?php

			if (isset($_GET['person'])) {
				echo "Text updated.<br><br>";
				$name = $_GET['person'];
				$file = "uploads/text/text.txt";
				file_put_contents($file, $name."\n\n", FILE_APPEND);
			}

		?>

		<a href="#" class="navigation"><img src="images/photo.png" width="20px" height="20px" alt="image">  PHOTO</a><br><br>

		<form action="uploadImage.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">UPLOAD IMAGE</button>
		</form><br><br>


		<a href="#" class="navigation"><img src="images/video.png" width="20px" height="20px" alt="image">  VIDEO</a><br><br>

		<form action="uploadVideo.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">UPLOAD VIDEO</button>
		</form><br><br>

		<a href="#" class="navigation"><img src="images/ambience.png" width="20px" height="20px" alt="image">  AMBIENCE</a><br><br>

		<form action="uploadSound.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">UPLOAD AMBIENCE</button>
		</form><br><br>

	  <a href="#" class="navigation"><img src="images/commentary.png" width="20px" height="20px" alt="image">  COMMENTARY</a><br><br>

		<form action="uploadDialogue.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="submit">UPLOAD COMMENTARY</button>
		</form><br>

	</nav>

  <img src="images/line.png" width="20px" height="20px" alt="line">
<br>


</body>
</html> 