<!DOCTYPE html>

<head>
  <title>Gamer Points List</title>
  <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<header>
    <p>Gamer Points List</p>
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
  <div class="achlistcontainer">
    <div class="achtitle">Game Title</div>
    <div class="achach">Achievement</div>
    <div class="achpoints">Points</div>
<?php
$points = $_GET["points"];

if($db = sqlite_open('games.db', 0666, $sqlLiteError)) {
  $query = sqlite_query($db, "SELECT title, achievement, points FROM games WHERE points='$points' ORDER BY title");
  $results = sqlite_fetch_all($query, SQLITE_ASSOC);

  foreach($results as $result) {
    printf("<div class=\"achlisttitle\">%s</div> <div class=\"achlistach\">%s</div> <div class=\"achlistpoints\">%s</div>", $result['title'], $result['achievement'], $result['points']);
  }
} else {
  die($sqlLiteError);
}
?>
  </div>
</div>

<footer>
  <p>Heatherlynn Lizama | CIS 141 | Item 2185 | Fall 2018 | Professor Dondi Hanson</p>
</footer>
</body>
</html>