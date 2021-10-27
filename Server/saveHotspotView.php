<?php 
require 'Connection.php';


$HotspotTable_ID = stripslashes($_POST['HotspotTable_ID']);

$HotspotTable_Text_Title = stripslashes($_POST['HotspotTable_Text_Title']);
$HotspotTable_Text_Content = stripslashes($_POST['HotspotTable_Text_Content']);
$HotspotTable_Picture = stripslashes($_POST['HotspotTable_Picture']);
$HotspotTable_Video = stripslashes($_POST['HotspotTable_Video']);
$Hotspottable_Hotspot_Icon = stripslashes($_POST['Hotspottable_Hotspot_Icon']);

//Update Data 
$sql = "UPDATE hotspottable SET HotspotTable_Video='".$HotspotTable_Video."'
,HotspotTable_Picture='".$HotspotTable_Picture."'
,HotspotTable_Text_Content='".$HotspotTable_Text_Content."'
,HotspotTable_Text_Title='".$HotspotTable_Text_Title."'
,Hotspottable_Hotspot_Icon='".$Hotspottable_Hotspot_Icon."'
 WHERE HotspotTable_ID=". $HotspotTable_ID;


if ($conn->query($sql) === TRUE) {
  echo "done";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>