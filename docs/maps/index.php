<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$bannertitle = "Digital Maps";
?>
<title><?=$bannertitle?></title>
<link href="../nljstyles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
require("../banner.php");
?>
<br />
<p>The following three maps are available in digital form:</p>
<!--mstheme-->
<table border="1" width="1024" bordercolordark="#666666" bordercolorlight="#666666">
  <tr>
    <td width="33%" align="center"><!--mstheme-->
      <img border="0" src="map1.jpg" width="185" height="133" />
        <!--mstheme-->
      </td>
    <td width="33%" align="center"><!--mstheme-->
      <img border="0" src="map2.jpg" width="134" height="157" />
        <!--mstheme-->
      </td>
    <td width="34%" align="center"><!--mstheme-->
      <img border="0" src="map3.gif" width="134" height="128" />
        <!--mstheme-->
      </td>
  </tr>
  <tr>
    <td width="33%" align="center"><!--mstheme-->
      <b>USGS Quad Map</b>
        <!--mstheme-->
      </td>
    <td width="33%" align="center"><!--mstheme-->
      <b>Aerial Photo #1</b>
        <!--mstheme-->
      </td>
    <td width="34%" align="center"><!--mstheme-->
      <b>Aerial Photo #2</b>
        <!--mstheme-->
      </td>
  </tr>
  <tr>
    <td width="33%" align="center"><!--mstheme-->
      Size:1,181 KB
        <!--mstheme-->
      </td>
    <td width="33%" align="center"><!--mstheme-->
      Size:664 KB
        <!--mstheme-->
      </td>
    <td width="34%" align="center"><!--mstheme-->
      Size:596 KB
        <!--mstheme-->
      </td>
  </tr>
  <tr>
    <td width="33%" align="center"><!--mstheme-->
      <a href="topo.zip">topo.zip</a>
        <!--mstheme-->
      </td>
    <td width="33%" align="center"><!--mstheme-->
      <a href="photo1.zip">photo1.zip</a>
        <!--mstheme-->
      </td>
    <td width="34%" align="center"><!--mstheme-->
      <a href="photo2.zip">photo2.zip</a>
        <!--mstheme-->
      </td>
  </tr>
</table>
<!--mstheme-->
<p>The aerial photos were taken at different times and cover slightly different
  areas. Both are good quality. Aerial photo #1 is courtesy of Scott
  Bair. The other two maps were downloaded from the web (I forgot the
  original location!). All three maps include the Aberjona aquifer region of
  Woburn.</p>
<p>To download an image, simply click on the file name and follow the
  instructions. Each zip file contains two files:</p>
<ol>
  <li>A JPEG file (*.jpg)</li>
  <li>A GMS Image file (*.img). This is a simple text file used by GMS to import and register
    TIFF and JPEG images.</li>
</ol>
<p>Unzip the files and keep them in the same directory. If you open the image file
  in GMS the JPEG image will appear, registered to state plane coordinates (in ft).</p>
</body>
</html>
