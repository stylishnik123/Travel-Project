
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet"href="css/monochrome.css"/>
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
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('css/Shimla Town-10.jpg','css/goabeach.jpg','css/agrafort.jpg','css/k4.jpg')">
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
 <?php
 $con =mysql_connect("localhost","root","");
if (!$con)
{
die('could not connect: ' . mysql_error());
}
mysql_select_db("travel1",$con);
$str="select * from travel1.car  where Car_Model = '" . $_POST['model'] . "'";

$result=mysql_query($str);
echo "<table border='1'>
<tr>
<th>Car Id</th>
<th>Car Model</th>
<th>Price per K.m.</th>
<th>Night Stay Charges</th>
</tr>";
while($row = mysql_fetch_array($result))
{
echo "<tr>";
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
