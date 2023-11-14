<nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="dynamic.php">List</a></li>
        <li><a href="information.php">Information</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <?php
          session_start();
          if ( !isset($_SESSION["email"]) )
          {
            echo "<li><a href='login.php'>Login</a></li>";
            echo "<li><a href='signup.php'>Signup</a></li>";
          }else{
            echo "<li><a href='blog.php'>Blog</a></li>";
            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
          }
        ?>        
      </ul>
    </nav>


