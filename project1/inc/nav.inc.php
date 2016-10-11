<nav>
    <div class="nav-wrapper indigo lighten-2">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">reorder</i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li class="home-big" <?php if ($currentPage == "Home") echo 'class="active"';?>><a href="index.php">Home</a></li>
          <li class= "nav-element" <?php if ($currentPage == "Soccer") echo 'class="active"';?>><a href="soccer.php">Soccer</a></li>
          <li class= "nav-element" <?php if ($currentPage == "Frisbee") echo 'class="active"';?>><a href="frisbee.php">Frisbee</a></li>
          <li class= "nav-element" <?php if ($currentPage == "Baseball") echo 'class="active"';?>><a href="baseball.php">Baseball</a></li>
          <li class= "nav-element" <?php if ($currentPage == "Colophon") echo 'class="active"';?>><a href="colophon.php">Colophon</a></li>
      </ul>

       <ul class="side-nav indigo lighten-4" id="mobile-demo">
        <li <?php if ($currentPage == "Home") echo 'class="active"';?>><a href="index.php">Home</a></li>
          <li class= "nav-element" <?php if ($currentPage == "Soccer") echo 'class="active"';?>><a href="soccer.php">Soccer</a></li>
          <li class= "nav-element" <?php if ($currentPage == "Frisbee") echo 'class="active"';?>><a href="frisbee.php">Frisbee</a></li>
          <li class= "nav-element" <?php if ($currentPage == "Baseball") echo 'class="active"';?>><a href="baseball.php">Baseball</a></li>
          <li class= "nav-element" <?php if ($currentPage == "Colophon") echo 'class="active"';?>><a href="colophon.php">Colophon</a></li>
      </ul>
      </ul>
    </div>
  </nav>

      
