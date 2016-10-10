<nav>
    <div class="nav-wrapper indigo lighten-2">
      <a href="index.php" class="brand-logo center">Home</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li <?php if ($currentPage == "Soccer") echo 'class="active"';?>><a href="soccer.php">Soccer</a></li>
          <li <?php if ($currentPage == "Frisbee") echo 'class="active"';?>><a href="frisbee.php">Frisbee</a></li>
          <li <?php if ($currentPage == "Baseball") echo 'class="active"';?>><a href="baseball.php">Baseball</a></li>
          <li <?php if ($currentPage == "Colophon") echo 'class="active"';?>><a href="colophon.php">Colophon</a></li>
      </ul>
    </div>
  </nav>

      
