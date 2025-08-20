<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$bannertitle = "Virtual Tour";
?>
<title><?=$bannertitle?></title>
<link href="../nljstyles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
require("../banner.php");
?>
<br />
<p>Click on each red dot to view a set of photos taken at that location.
Aerial photo provided courtesy of Scott Bair. Individual photos by Norm
Jones and Oscar Soule.</p>
<p>
  <map name="FPMap9" id="FPMap9">
    <area href="location1a.htm" shape="circle" coords="315, 508, 8" />
    <area href="location14.htm" shape="circle" coords="239, 540, 8" />
    <area href="location15.htm" shape="circle" coords="82, 621, 8" />
    <area href="location2a.htm" shape="circle" coords="325, 431, 8" />
    <area href="location3.htm" shape="circle" coords="315, 388, 8" />
    <area href="location13.htm" shape="circle" coords="308, 355, 8" />
    <area href="location12a.htm" shape="circle" coords="330, 296, 8" />
    <area href="location11a.htm" shape="circle" coords="318, 268, 8" />
    <area href="location6a.htm" shape="circle" coords="598, 29, 7" />
    <area href="location5.htm" shape="circle" coords="227, 27, 8" />
    <area href="location4a.htm" shape="circle" coords="170, 24, 8" />
    <area href="location7a.htm" shape="circle" coords="186, 148, 8" />
    <area href="location8a.htm" shape="circle" coords="174, 235, 8" />
    <area href="location9a.htm" shape="circle" coords="166, 333, 8" />
    <area href="location10a.htm" shape="circle" coords="153, 374, 8" />
  </map>
  <img src="quicktourmap.gif" alt="" width="640" height="638" border="0" usemap="#FPMap9" /></p>
</body>
</html>
