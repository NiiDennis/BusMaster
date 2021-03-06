<?php require_once('Connections/BusMaster.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_BusMaster, $BusMaster);
$query_Recordset1 = "SELECT * FROM registration ORDER BY Reg_id ASC";
$Recordset1 = mysql_query($query_Recordset1, $BusMaster) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="800" height="308" border="0">
  <tr>
    <td>First Name:</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <span id="sprytextfield1">
        <label for="FirstName"></label>
        <input name="FirstName" type="text" id="FirstName" />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Last Name:</td>
  </tr>
  <tr>
    <td><form id="form2" name="form2" method="post" action="">
      <span id="sprytextfield2">
        <label for="LastName"></label>
        <input name="LastName" type="text" id="LastName" />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Password:</td>
  </tr>
  <tr>
    <td><form id="form3" name="form3" method="post" action="">
      <span id="sprytextfield3">
        <label for="Password"></label>
        <input name="Password" type="password" id="Password" />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Address:</td>
  </tr>
  <tr>
    <td><form id="form4" name="address" method="post" action="">
      <span id="sprytextfield4">
        <label for="Address"></label>
        <input name="Address" type="text" id="Address" />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>City:
      <form id="form5" name="form5" method="post" action="">
        <span id="sprytextfield5">
          <label for="City"></label>
          <input name="City" type="text" id="City" />
          <span class="textfieldRequiredMsg">A value is required.</span></span>
      </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Age:
      <form id="form6" name="form6" method="post" action="">
        <span id="sprytextfield6">
          <label for="Age"></label>
          <input name="Age" type="text" id="Age" />
          <span class="textfieldRequiredMsg">A value is required.</span></span>
      </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Contact:
      <form id="form7" name="form7" method="post" action="">
        <span id="sprytextfield7">
        <label for="Contact"></label>
        <input name="Contact" type="text" id="Contact" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
      </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email:
      <form id="form8" name="form8" method="post" action="">
        <span id="sprytextfield8">
        <label for="Email"></label>
        <input name="Email" type="text" id="Email" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
      </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form9" name="form9" method="post" action="">
      <input type="submit" name="Submit" id="Submit" value="Sign Up" />
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form10" name="form10" method="post" action="">
      <input type="reset" name="Cancel" id="Cancel" value="Cancel" />
    </form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "phone_number");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "email");
</script>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
