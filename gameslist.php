<!DOCTYPE html>

<head>
  <title>Games List</title>
  <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<header>
  <p>Games List</p>
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
  <div class="gameslistcontainer">
    <div class="gametitle">Game Title</div>
    <div class="gamecategory">Category</div>
<?php
  if($db = sqlite_open('games.db', 0666, $sqlLiteError) ) {
    $query = sqlite_query($db, "SELECT title, category FROM games GROUP BY title ORDER BY title");
    $results = sqlite_fetch_all($query, SQLITE_ASSOC);

    foreach($results as $result) {
      printf("<div class=\"gamelisttitle\"><a href=\"achievementssubmit.php?title=%s\">%s</a></div> <div class=\"gamelistcat\">%s</div>", $result['title'], $result['title'], $result['category']);
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