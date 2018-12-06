<!DOCTYPE html>

<head>
  <title>Add Achievement</title>
  <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<header>
  <p>Add Achievement</p>
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
  <form action ="addachievementsubmit.php">
    <div class="formtitle">Game Title:</div>
    <div class="forminput"><input name="title" type="text" size="30"/></div>
    <div class="formtitle">Category:</div>
    <div class="forminput"><select name="category">
      <option>Action</option>
      <option>Casual</option>
      <option>Shooter</option>
      <option>Strategy</option>
      <option>Survival</option>
      <option>Zombies</option>
    </select></div>
    <div class="formtitle">Achievement:</div>
    <div class="forminput"><input name="achievement" type="text" size="30"/></div>
    <div class="formtitle">Points:</div>
    <div class="forminput"><input name="points" type="text" size="30"/></div>
    <div><input type="submit" value="Submit" /></div>
  </form>
</div>

<footer>
  <p>Heatherlynn Lizama | CIS 141 | Item 2185 | Fall 2018 | Professor Dondi Hanson</p>
</footer>

</body>
</html>