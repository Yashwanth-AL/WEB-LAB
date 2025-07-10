<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Date</title>
  <style>
    h1 {
      text-align: center;
      font-family: Arial, sans-serif;
    }
    .date {
      color: green;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>
    Today's date is
    <span class="date">
      <?php
        // Display today's date in dd-mm-yyyy format
        echo date("d-m-Y");
      ?>
    </span>
  </h1>
</body>
</html>
