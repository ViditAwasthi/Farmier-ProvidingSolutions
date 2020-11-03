<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Solution</title>
  </head>
  <body>

    <div class="solution_table">
    <table >
     <tr>

       <th>Crop Name</th>
       <th> Disease</th>
       <th> Symptom</th>
       <th> Symptom Picture</th>
       <th> Control/Remedy</th>

     </tr>




    <?php

    $crops_name = $_POST['crops_name'];
    $symptom_name = $_POST['symptom_name'];


     $host = "localhost";
        $dbUsername = "id13519050_viditawasthi2";
        $dbPassword = "Greenday@1965";
        $dbname = "id13519050_mydb";

        //Creating connection

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

      //if there is any error in creating Con. then close

        if (mysqli_connect_error())
     {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

        }


        else

         {

      $sql = "SELECT id, crop, disease, symptom, pic, solution FROM solution_table WHERE crop= $crops_name AND symptom = $symptom_name";
      $result = $conn->query($sql);
      if ($result->num_rows > 0)
       {
      // output data of each row
      while($row = $result->fetch_assoc())
      {
      echo "<tr><td>" . $row["crop"]. "</td><td>" . $row["disease"] . "</td><td>"
      . $row["symptom"]. "</td><td>" . $row["pic"] ."</td><td>" . $row["solution"] ."</td></tr>";

    }
      echo "</table>";
    }
      else
      {
        echo "0 results";
       }

       $conn->close();

       ?>
        }

      </table>
      </div>

  </body>
</html>
