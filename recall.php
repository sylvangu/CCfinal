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

  	<h1><a href="index.php">RECALL</a></h1>


<?php

//DISPLAYING THE TEXT
$filesText = file_get_contents("uploads/text/text.txt");

echo "TEXT<br><br>";
echo $filesText;

echo "<br><br><img src='images/line.png' width='20px' height='20px' alt='line'>";

//DISPLAYING THE IMAGES

echo "<br><br>PHOTOS<br><br>";
$filesImage = glob("uploads/images/*.*");

for ($i=0; $i<count($filesImage); $i++) {
    $image = $filesImage[$i];
    //print $image ."<br />";
    echo '<img src="'.$image .'" height=20% width=20% alt="Random image" /><br>';
}

echo"<br><img src='images/line.png' width='20px' height='20px' alt='line'><br><br>";

//DISPLAYING THE VIDEO
echo "VIDEOS<br>";

$filesVideo = glob("uploads/video/*.*");

for ($i=0; $i<count($filesVideo); $i++) {
    $video = $filesVideo[$i];
    //print $video ."<br />";
    echo '<video width="360" height="240" controls> <source src="'.$video.'"></video><br><br>';
}


echo"<img src='images/line.png' width='20px' height='20px' alt='line'><br><br>";

//DISPLAYING THE AMBIENCE
echo "AMBIENCE<br><br>";

$filesSound = glob("uploads/audio/sounds/*.*");

for ($i=0; $i<count($filesSound); $i++) {
    $sound = $filesSound[$i];
    echo '<audio controls>
  <source src="'.$sound.'">
</audio><br>';
}

echo"<br><img src='images/line.png' width='20px' height='20px' alt='line'><br><br>";

//DISPLAYING THE COMMENTARY
echo "COMMENTARY<br><br>";

$filesDialogue = glob("uploads/audio/dialogue/*.*");

for ($i=0; $i<count($filesDialogue); $i++) {
    $dialogue = $filesDialogue[$i];
    echo '<audio controls>
  <source src="'.$dialogue.'">
</audio><br>';
}



?>


</body>
</html> 