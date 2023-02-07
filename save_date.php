<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>Зміна дати</title>

        <style type="text/css">
          p {
            font-size: 20px;
            font-family: Arial;
          }
        </style>
    </head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $password = $_POST['date_3'];

  // password
  if ($password === "password") {
    $date_1 = $_POST['date_1'];
    file_put_contents('date1.txt', $date_1);

    $date_2 = $_POST['date_2'];
    file_put_contents('date2.txt', $date_2);

    echo "<p style='color: green; text-align: center;'>Date change successful!</p>";
  } else {
    echo "<p style='color: red; text-align: center;'>Error! Wrong date!</p>";
  }
}
?>
</body>
</html>