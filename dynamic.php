<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>List</title>
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
      <h2>DYNAMIC LIST</h2>
      <div class="list">
        <ul class="all-items">
          <li>
            <p>One</p>
            <button class="add-button">add</button
            ><button class="remove-button">remove</button>
          </li>
          <li>
            <p>two</p>
            <button class="add-button">add</button
            ><button class="remove-button">remove</button>
          </li>
          <li>
            <p>three</p>
            <button class="add-button">add</button
            ><button class="remove-button">remove</button>
          </li>
          <li>
            <p>four</p>
            <button class="add-button">add</button
            ><button class="remove-button">remove</button>
          </li>
          <li>
            <p>five</p>
            <button class="add-button">add</button
            ><button class="remove-button">remove</button>
          </li>
          <li>
            <p>six</p>
            <button class="add-button">add</button
            ><button class="remove-button">remove</button>
          </li>
        </ul>
        <ul class="added-items"></ul>
      </div>
    </main>
    <script type="text/javascript" src="javascript.js"></script>
  </body>
</html>
