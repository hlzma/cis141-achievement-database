<!DOCTYPE html>

<head>
  <title>Playlist - Add a Game</title>
  <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<header>
  <p>Achievement Added</p>
</header>

<nav>
  <ul class="menu">
    <li class="menuitem"><a href="index.php">Home</a></li>
    <li class="menuitem"><a href="addachievement.php">Add Achievement</a></li>
    <li class="menuitem"><a href="gameslist.php">List All Games</a></li>
    <li class="menuitem"><a href="achievements.php">List By Achievements</a></li>
    <li class="menuitem"><a href="points.php">List By Gamer Points</a></li>
    <li class="erasedata"><a href="dbcreate.php">Erase Data</a></li>
  </ul>
</nav>

<div class="container">
  <p>
<?php
  $title =  $_GET["title"];  
  $category = $_GET["category"];
  $achievement = $_GET["achievement"];
  $points = $_GET["points"];

  if($db = sqlite_open('games.db',0666, $sqlLiteError) ) {
    sqlite_query($db,"INSERT INTO games VALUES('$title', '$category', '$achievement', '$points')");
    printf("The achievement <span class=\"gamesubmit\">%s</span> was added to the <span class=\"gamesubmit\">%s</span> game title in the <span class=\"gamesubmit\">%s</span> category worth <span class=\"gamesubmit\">%s</span> gamer points.", $achievement, $title, $category, $points);
  } else {
    die($sqlLiteError);
  }
?>
  </p>
  <p><a href="addachievement.php">Add another game?</a></p>
</div>

<footer>
  <p>Heatherlynn Lizama | CIS 141 | Item 2185 | Fall 2018 | Professor Dondi Hanson</p>
</footer>

</body>
</html>