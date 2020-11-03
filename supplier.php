<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Supplier's Help Portal</title>
    <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- Topbar Division -->


      <div class="custom-padding">
        <nav style="padding-bottom: 0px;">
          <div class="logo">
            <img class="logo" src="photos/logo.png" alt="">
          </div>

          <ul class="menu-area textstyle">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>




<!-- Welcome Division -->


<div class="welcome">
  <img class="farmerpic" src="photos/manufacture.png" alt="Supplier">
    <h2 class="abouthead firstheading"><b>Welcome to the Supplier's Portal</b></h2>
<img class="croppics rice2" src="photos/rice2.png" alt="rice">
<img class="croppics riceround"src="photos/riceround.png" alt="rice">
<img class="croppics corn"src="photos/corn.png" alt="corn">
<img class="croppics wheat"src="photos/rice.png" alt="wheat">
</div>

<div class="impinfo">
  <hr class=" infoborder">
  <h3 class="impinfoheading">Some Important Schemes & Information</h3>
  <img class="giphy"src="https://media.giphy.com/media/1msBd0qKHs05PuavZ2/giphy.gif" alt="gif">

<div class="motionpic">
  <marquee scrollamount="5"
  direction="left"
  behavior="scroll"  >

  <img class="firstmotion" src="https://i1.wp.com/lexquest.in/wp-content/uploads/2018/03/img2.jpg?resize=1024%2C386&ssl=1" />

  <img class="secondmotion"src="https://www.jatinverma.org/uploads/2020_04/pasted_image_02.png" alt="vikas yojna">

<img class="thirdmotion" src="https://i.ytimg.com/vi/j10Y5dGP38I/maxresdefault.jpg" alt="sinchai yojna">
  </marquee>
  <hr class=" infoborder tableborder style="margin-bottom: 80px;">
  <br>
  <br>


  <!-- Table Division -->


  <div class="tables" style="margin-left: 180px;">





<table>
  <tr>
    <th> Sr.No.</th>
    <th>Crop Name</th>
    <th> Crop Variety</th>
    <th> Quantity</th>
    <th> Selling Price</th>
    <th> Farmer Name</th>
    <th> Village </th>
    <th> State</th>
    <th> Pincode </th>
    <th> Contact Number</th>
  </tr>

  <?php

$conn = mysqli_connect("localhost", "id13519050_viditawasthi2", "Greenday@1965", "id13519050_mydb");

// Check connection

if ($conn->connect_error)
{

die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT id, crop_name, variety_name, qty_wt, sell_price, farmer_name, vil_name, state_name, pin, contact_no FROM sell_request";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc())
{
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["crop_name"] . "</td><td>"
. $row["variety_name"]. "</td><td>" . $row["qty_wt"] ."</td><td>" . $row["sell_price"] ."</td><td>" . $row["farmer_name"] ."</td><td>" . $row["vil_name"] ."</td><td>" . $row["state_name"] ."</td><td>" . $row["pin"] . "</td><td>" . $row["contact_no"] ."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>


    </table>





  </div>
  <br>
</div>
</div>
<div class="bottom-container">
<a class="linkedin" href="https://www.linkedin.com/in/vidit-awasthi-768010195/" target="_blank">
<img src="photos/linkedin.png" alt="LinkedIn" height="60px" width="60px">
</a>

<a class="github" href="https://github.com/ViditAwasthi" target="_blank">
<img src="photos/cat.png" alt="Github" height="60px" width="60px">
</a>

<a class="youtube" href="https://www.youtube.com/channel/UCWnuVfW4NiW84lZZtuybEQQ/featured" target="_blank">
<img src="photos/youtube.png" alt="Youtube" height="60px" width="60px">
</a>

<a class="instagram" href="https://www.instagram.com/vidit_awasthi/?hl=en" target="_blank">
<img src="photos/instagram.png" alt="Instagram" height="60px" width="60px">
</a>

<p class ="copyright">© 2020 Vidit Awasthi & Co.</p>

</div>
</body>
</html>
