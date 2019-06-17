<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet"href="css/monochrome.css"/>
</head>
<style type="text/css">
<!--
.style2 {
	color: #FFFFFF;
	font-family:"Lucida Handwriting", "Monotype Corsiva";
}

.style5 {font-family: "Lucida Handwriting", "Monotype Corsiva";
font-size:18px;
color:#990000;}
-->
</style>

<body>
<div id="pagewrapper">
<div id="header"> 
<marquee>
<img src="css/mixpict.jpg" width="3500" height="80" />
<h4 class="style2">TRIP TRAVEL AGENCY &nbsp;&nbsp;&nbsp;&nbsp;  TRIP TRAVEL AGENCY &nbsp;&nbsp;&nbsp;&nbsp;    TRIP TRAVEL AGENCY &nbsp;&nbsp;&nbsp;&nbsp;   TRIP TRAVEL AGENCY  &nbsp;&nbsp;&nbsp;&nbsp; TRIP TRAVEL AGENCY&nbsp;&nbsp;&nbsp;&nbsp; TRIP TRAVEL AGENCY  &nbsp;&nbsp;&nbsp;&nbsp; TRIP TRAVEL AGENCY  &nbsp;&nbsp;&nbsp;&nbsp; TRIP TRAVEL AGENCY  &nbsp;&nbsp;&nbsp;&nbsp; TRIP TRAVEL AGENCY &nbsp;&nbsp;&nbsp;&nbsp;TRIP TRAVEL AGENCY  &nbsp;&nbsp;&nbsp;&nbsp;</h4>
</marquee>
</div>
<div id="menuwrapper">
  <table width="1024" height="35" border="1" class="style5">
    <tr>
      <td width="128"><a href="index.php"> HOME </a></td>
      <td width="128"><a href="aboutus.php">ABOUT US</a></td>
      <td width="128"><a href="car.php">CAR</a></td>
      <td width="128"><a href="bus.php">BUS</a></td>
      <td width="128"><a href="train.php">TRAIN</a></td>
      <td width="128"><a href="login.php">LOGIN</a></td>
      <td width="128"><a href="admin.php">ADMIN</a></td>
      <td width="128"><a href="feedback.php">FEEDBACK</a></td>
    </tr>
  </table>
</div>
<div id="maincontent">
<tr>
      <td><div align="right"><a href="welcomeadmin.php" target="_self">BACK</a></div></td>
    </tr>
</br>
<?php
$con =mysql_connect("localhost","root","");
if (!$con)
{
die ('could not connect: '. mysql_error());
}
mysql_select_db("travel1",$con);
$result = mysql_query("select *from travel1.car");
echo "<table border='1'>
<tr>
<th>car id</th>
<th>car model</th>
<th>charges for night stay</th>
<th>price per km</th>
<th>picname</th>

</tr>";
while($row = mysql_fetch_array($result))
{
echo " <td> " . $row['Car_id'] . "</td>";
echo " <td> " . $row['Car_Model'] . "</td>";
echo " <td> " . $row['charges_for_night_stay'] . "</td>";
echo " <td> " . $row['Price_per_km'] . "</td>";
echo ' <td> ' . '<img src="upload/'  . $row['pic_name'] . '"  width=200 height=150>'  . '</td>';

echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</div>
<div id="sidebar">
<img src="css/Copy of lotustemple.jpg" width="200px" height="130px" />
<img src="css/Copy of images_015.jpg" width="200px" height="130px" />
<img src="css/t6.jpg" width="200px" height="130px" />
<img src="css/tx5.jpg" width="200px" height="130px" />
<img src="css/goa.jpg" width="200px" height="130px" />
<img src="css/Waterside - 1024x768.jpg"  width="200px" height="130px" />
</div>
<div id="footer">
<marquee>
<h4 class="style2">Developed by Mahima,BPSMV &nbsp;&nbsp;&nbsp;&nbsp; Developed by Mahima,BPSMV &nbsp;&nbsp;&nbsp;&nbsp;   Developed by Mahima,BPSMV &nbsp;&nbsp;&nbsp;&nbsp;   Developed by Mahima,BPSMV  &nbsp;&nbsp;&nbsp;&nbsp;Developed by Mahima,BPSMV &nbsp;&nbsp;&nbsp;&nbsp; Developed by Mahima,BPSMV  &nbsp;&nbsp;&nbsp;&nbsp; Developed by Mahima,BPSMV &nbsp;&nbsp;&nbsp;&nbsp; Developed by Mahima,BPSMV &nbsp;&nbsp;&nbsp;&nbsp; Developed by Mahima,BPSMV &nbsp;&nbsp;&nbsp;&nbsp;Developed by Mahima,BPSMV &nbsp;&nbsp;&nbsp;&nbsp;</h4>
</marquee>
</div>
</div>

</body>
</html>
