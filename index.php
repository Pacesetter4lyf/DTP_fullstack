<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <h1>Just Basic</h1>
    </header>

    <!-- Navigation Menu -->
    <?php
      include('header.php');
    ?>

    <!-- Main Content -->
    <main>

    <?php
      if ( isset($_SESSION["email"]) ) header("location: profile.php");
      else header("location: login.php");
      // {
      //   echo "<p>You are now logged in as " . $_SESSION["firstname"] . ".</p>";
      //   echo "<p>Welcome, " . $_SESSION["email"] . "!</p>";
      // }
      
    ?>
    </main>
  </body>
</html>
