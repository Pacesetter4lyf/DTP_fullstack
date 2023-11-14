<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <?php
      include('header.php');
    ?>
    <h1>Welcome, <?php echo $_SESSION['firstname']; ?>!</h1>
    <h3>your email is , <?php echo $_SESSION['email']; ?>!</h3>
    <!-- Display user information here -->
</body>
</html>