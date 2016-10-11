<nav>
    <div class="nav-wrapper indigo lighten-2">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">reorder</i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li id = "home-big" <?php if ($currentPage == "Home") echo 'class="active"';?>><a href="index.php">Home</a></li>
          <li id = "soccer" <?php if ($currentPage == "Soccer") echo 'class="active"';?>><a href="soccer.php">Soccer</a></li>
          <li id = "frisbee" <?php if ($currentPage == "Frisbee") echo 'class="active"';?>><a href="frisbee.php">Frisbee</a></li>
          <li id = "baseball" <?php if ($currentPage == "Baseball") echo 'class="active"';?>><a href="baseball.php">Baseball</a></li>
          <li id = "colophon" <?php if ($currentPage == "Colophon") echo 'class="active"';?>><a href="colophon.php">Colophon</a></li>
      </ul>

       <ul class="side-nav indigo lighten-4" id="mobile-demo">
        <li <?php if ($currentPage == "Home") echo 'class="active"';?>><a href="index.php">Home</a></li>
          <li <?php if ($currentPage == "Soccer") echo 'class="active nav-element"'; else echo 'class="nav-element"';?>><a href="soccer.php">Soccer</a></li>
          <li <?php if ($currentPage == "Frisbee") echo 'class="active nav-element"'; else echo 'class="nav-element"';?>><a href="frisbee.php">Frisbee</a></li>
          <li <?php if ($currentPage == "Baseball") echo 'class="active nav-element"'; else echo 'class="nav-element"';?>><a href="baseball.php">Baseball</a></li>
          <li <?php if ($currentPage == "Colophon") echo 'class="active nav-element"'; else echo 'class="nav-element"';?>><a href="colophon.php">Colophon</a></li>
          
      </ul>
    </div>
  </nav>

      
