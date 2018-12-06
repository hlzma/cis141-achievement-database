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

<form action ="pointssubmit.php">
  <div class="formtitle">List By:</div>
  <div class="forminput"><select name="points">

<?php
if($db = sqlite_open('games.db', 0666, $sqlLiteError) ) {
  $query = sqlite_query($db, "SELECT points FROM games GROUP BY points ORDER BY points ASC");
  $results = sqlite_fetch_all($query, SQLITE_ASSOC);

  foreach($results as $result) {
    printf("<option>%s</option>", $result['points']);
  }
} else {
  die($sqlLiteError);
}
?>

  </select></div>
  <div><input type="submit" value="Submit" /></div>
</form>

</div>
    
<footer>
  <p>Heatherlynn Lizama | CIS 141 | Item 2185 | Fall 2018 | Professor Dondi Hanson</p>
</footer>
</body>
</html>