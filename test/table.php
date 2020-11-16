<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="table.css">
    <title></title>
  </head>

  <body>
      <table>
        <?php
        for ($i = 0; $i <= 7 ; $i++) {
        ?>
            <tr>
              <td class = "num"> <?= $i ?> </td>
              <td> Song </td>
              <td> Singer </td>
              <td> Album </td>
              <td class = "time"> Time </td>
            </tr>
        <?php
        }
        ?>

      </table>

  </body>

</html>
