<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontact Oss</title>
<style type="text/css">
<!--
.style1 {
	font-size: 11px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	padding-right: 36px;
	padding-left: 30px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #717870;
}
.style2 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15" valign="top" background="images/index_01.jpg">&nbsp;</td>
    <td width="639" valign="top"><table width="94%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/index_02.jpg" width="222" height="114" /></td>
        <td><img src="images/index_03.jpg" width="247" height="114" /></td>
        <td><img src="images/index_04.jpg" width="270" height="114" /></td>
      </tr>
      <tr>
        <td><img src="images/index_06.jpg" width="222" height="127" /></td>
        <td><img src="images/index_07.jpg" width="247" height="127" /></td>
        <td><img src="images/index_08.jpg" width="270" height="127" /></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><img src="images/index_09.jpg" width="739" height="13" /></td>
        </tr>
        <tr>
          <td valign="top" background="images/index_10.jpg"><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="181" valign="top"><table width="181" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="images/menu_01.jpg" width="181" height="15" /></td>
                </tr>
                <tr>
                  <td><a href="about.html"><img src="images/menu_02.jpg" width="181" height="28" border="0" /></a></td>
                </tr>
                <tr>
                  <td><a href="behandlinger.html"><img src="images/menu_03.jpg" width="181" height="32" border="0" /></a></td>
                </tr>
                <tr>
                  <td><a href="product.html"><img src="images/menu_04.jpg" width="181" height="32" border="0" /></a></td>
                </tr>
                <tr>
                  <td background="images/menu_06.jpg"><a href="contact.html"><img src="images/menu_05.jpg" width="181" height="32" border="0" /></a></td>
                </tr>
                <tr>
                  <td><img src="images/menu_07.jpg" width="181" height="23" /></td>
                </tr>
              </table>
              <p><img src="images/sticker.jpg" width="181" height="125" /></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>                </td>
              <td valign="top"><table width="534" border="0" align="left" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top"><img src="images/frame_01.jpg" width="530" height="17" /></td>
                </tr>
                <tr>
                  <td valign="top" background="images/frame_02.jpg"><p class="style1"><strong>Kontakt Oss</strong></p>


                    <p class="style1">
<?php

    $Name = $HTTP_POST_VARS["name"];
    $Phone = $HTTP_POST_VARS["phone"];
	$Email = $HTTP_POST_VARS["email"];


    $checkbox1 = $HTTP_POST_VARS["checkbox1"];
    $checkbox2 = $HTTP_POST_VARS["checkbox2"];

	$textarea = $HTTP_POST_VARS["textarea"];
	$textarea = str_replace("\n", "<br>", $textarea);

	
$mailto = "hestadma@hotmail.com";
$subject = "Kontakt Information";

$header = "From: $Email\n";
$header = $header."Return-Path: hestadma@hotmail.com\n";
$header = $header."Reply-to: hestadma@hotmail.com \n";
$header = $header."MIME-Version: 1.0\n";
$header = $header."Content-Type: text/html; charset=iso-8859-1\n";
$header = $header."Content-Transfer-Encoding: 8bit\n";
$header = $header."X-Priority: 1\n";
$header = $header."X-MSMail-Priority: High\n";
$header = $header."Importance: High\n";
$header = $header."X-Mailer: PHP\n";
$header = $header."X-MimeOLE: Produced By php\n";

$body =  "<table cellpadding=\"2\" border=\"0\"><tr><td colspan=\"3\" align=\"center\"><B><u>Kontakt Information</u></b><br></td></tr>";
$body = $body."<tr><td width=\"60%\" valign=\"top\"><font family=\"verdana\"><b>Navn:</b></font></td><td width=\"1%\"></td> <td valign=\"top\"><font family=\"verdana\">".$Name."</font></td></tr>\n";
$body = $body."<tr><td width=\"60%\" valign=\"top\"><font family=\"verdana\"><b>E-post:</b></font></td><td width=\"1%\"></td><td valign=\"top\"><font family=\"verdana\">".$Email."</font></td></tr>\n";
$body = $body."<tr><td width=\"60%\" valign=\"top\"><font family=\"verdana\"><b>Telefon:</b></font></td><td width=\"1%\"></td><td valign=\"top\"><font family=\"verdana\">".$Phone."</font></td></tr>\n";
$body = $body."<tr><td width=\"60%\" valign=\"top\"><font family=\"verdana\"><b>Gjelder:</b></font></td><td width=\"1%\"></td><td valign=\"top\"><font family=\"verdana\">\n";

if ($checkbox1 == true)
{
$body = $body.$checkbox1."<br>";
}
if ($checkbox2 == true)
{
$body = $body.$checkbox2."<br>";
}

$body = $body .= "</font></td></tr>\n";

$body = $body."<td width=\"60%\" valign=\"top\"><font family=\"verdana\"><b>Sp&oslash;rsm&aring;l/Tid og hva slags time: </b></font></td><td width=\"1%\"></td><td valign=\"top\"><font family=\"verdana\">".$textarea."</font></td></tr>\n";
$body = $body."</table>";


if(mail($mailto,$subject,$body,$header)) 
{
 echo "Thanks for submitting the info. We will get back to you shortly.<br><br><a href=\"javascript:history.back()\";>Back</a>";
}
else 
{
  echo "Mail could not be sent!";
exit;
}



?>
</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                  <td valign="top"><img src="images/frame_03.jpg" width="530" height="23" /></td>
                </tr>
              </table>
			    <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              <p align="justify" class="style1">&nbsp;</p>
              </td>
            </tr>
            <tr>
              <td colspan="2" valign="top"><div align="center" class="style1">&copy; Copyright 2007-2008. All rights reserved.</div></td>
              </tr>
          </table>
          </td>
        </tr>
        <tr>
          <td valign="top"><img src="images/index_11.jpg" width="739" height="25" /></td>
        </tr>
      </table></td>
    <td height="16" valign="top" background="images/index_05.jpg">&nbsp;</td>
  </tr>
</table>
</body>
</html>
