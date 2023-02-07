<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

      <title>Product 1</title>

      <style type="text/css">
         p {
            font-size: 20px;
            text-align: center;
            font-family: Arial;
         }
      </style>
   </head>
   <body>
      <p>
         Від
         <b><?php echo file_get_contents("../date1.txt") ?></b>
         до
         <b><?php echo file_get_contents("../date2.txt") ?></b>
      </p>
   </body>
</html>