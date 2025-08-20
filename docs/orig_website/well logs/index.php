<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$bannertitle = "Well Logs";
?>
<title><?=$bannertitle?></title>
<link href="../nljstyles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
require("../banner.php");
?>
<br />
<p>Each of the yellow dots below represents the location of a well log.
Click on the dot to view the well log in pdf format. The well logs are
from the appendix of the <a href="../nus/index.htm">NUS Report</a>. Not all of
the well logs listed in the NUS Report were used on this map. Aerial photo
provided courtesy of Scott Bair.</p>
<p>
  <map name="FPMap10" id="FPMap10">
    <area href="s75.pdf" shape="circle" coords="158, 12, 12" />
    <area href="s6.pdf" shape="circle" coords="347, 13, 11" />
    <area href="s71.pdf" shape="circle" coords="488, 27, 11" />
    <area href="s81.pdf" shape="circle" coords="371, 68, 12" />
    <area href="s76.pdf" shape="circle" coords="151, 158, 12" />
    <area href="s72.pdf" shape="circle" coords="263, 147, 12" />
    <area href="s82.pdf" shape="circle" coords="378, 125, 12" />
    <area href="s63.pdf" shape="circle" coords="437, 121, 12" />
    <area href="s21.pdf" shape="circle" coords="524, 137, 11" />
    <area href="s69.pdf" shape="circle" coords="497, 212, 12" />
    <area href="s64.pdf" shape="circle" coords="386, 205, 12" />
    <area href="s65.pdf" shape="circle" coords="412, 233, 12" />
    <area href="s66.pdf" shape="circle" coords="416, 278, 12" />
    <area href="s85.pdf" shape="circle" coords="311, 214, 12" />
    <area href="s79.pdf" shape="circle" coords="146, 278, 12" />
    <area href="s84.pdf" shape="circle" coords="336, 320, 12" />
    <area href="s41.pdf" shape="circle" coords="433, 378, 12" />
    <area href="s78.pdf" shape="circle" coords="174, 359, 12" />
    <area href="s80.pdf" shape="circle" coords="137, 353, 12" />
    <area href="s86.pdf" shape="circle" coords="326, 414, 12" />
    <area href="s77.pdf" shape="circle" coords="261, 475, 11" />
    <area href="s83.pdf" shape="circle" coords="210, 524, 12" />
    <area href="bw3.pdf" shape="circle" coords="160, 470, 12" />
    <area href="bw4.pdf" shape="circle" coords="122, 474, 11" />
    <area href="bw5.pdf" shape="circle" coords="140, 445, 11" />
    <area href="s22.pdf" shape="circle" coords="557, 127, 11" />
    <area href="s67.pdf" shape="circle" coords="572, 199, 12" />
  </map>
  <img src="welllogmap.jpg" alt="" width="640" height="638" border="0" usemap="#FPMap10" /></p>
</body>
</html>
