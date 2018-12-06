<!DOCTYPE html>

<head>
  <title>Playlist - Add a Game</title>
  <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<header>
  <p>Add a Game</p>
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
<?php
  if($db = sqlite_open('games.db', 0666, $sqlLiteError)) {
    sqlite_query($db, 'DROP TABLE games');
    sqlite_query($db, 'CREATE TABLE games(title varchar(30), category varchar(30), achievement varchar(30), points int(3))');
    printf("Database created successfully!");
  } else {
    die($sqlLiteError);
  }
?>
</div>

<footer>
  <p>Heatherlynn Lizama | CIS 141 | Item 2185 | Fall 2018 | Professor Dondi Hanson</p>
</footer>

</body>
</html>