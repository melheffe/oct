<?php 
$flex="The Orlando FlexTicket is the best way to maximize the fun of a Florida holiday giving you: 

* Variety - Unlimited access to a combination of 5 or 6 of the most popular theme parks in Florida with a wide range of attractions for the whole family! 
* Flexibility - You can visit any or all of the parks everyday.
* Value-For-Money - The world's most exciting attractions for one unbeatable price. Incredible savings over buying one-day park tickets at the gate.
And there’s more. You’ll also receive:

FREE coach transportation to Busch Gardens on the Busch Gardens Shuttle Express when you purchase the Orlando FlexTicket Plus*. Only pay for parking once if you visit more than one park on the same day. Flexibility, variety and great value for money. The Orlando FlexTickets have it all. 
";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="includes/find_universal_match.php?id_pds=<?=$id_pds?>">
<input name="ses_track" type="hidden" id="ses_track" value="<?=$ses_track?>" />
<table width="217" border="0" align="right" cellpadding="0" cellspacing="0">
    <tr class="style3">
      <td height="36" colspan="5" background="images/orange_tk_tab.jpg" class="norm"><div title="cssbody=[pequenito] cssheader=[tutilillos] header=[Conditions] body=[<?=nl2br($flex)?>]" align="center"><a href="#">Flex Ticket finder</a></div></td>
    </tr>
    <tr class="style3">
      <td width="25%"><div align="center">Qty.</div></td>
      <td width="23%"><div align="center">Parks</div></td>
      <td width="2%"><div align="center"></div></td>
      <td width="27%"><div align="center">Type</div></td>
      <td width="23%">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">
        <select name="cant" id="cant">
          <option value="1" selected="selected">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
        </select>
      </div></td>
      <td>
        <div align="center">
          <select name="parks" id="parks">
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
        </div></td>
      <td><div align="center"></div></td>
      <td colspan="2"><select name="type" id="type">
        <option value="1">Adult</option>
        <option value="2" selected="selected">Child</option>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5"><div align="center"><img src="images/flex.JPG" width="90" height="48" /><br />
        <br />
      </div></td>
    </tr>
    <tr>
      <td colspan="5"><div align="center">
        <input type="image" src="images/butt.jpg"
 value="About submit buttons"
 alt="[Submit]"
 name="submit"
 title=
"Checkout &gt;" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
