<?php 
require 'Connection.php';


$sql = "INSERT INTO hotspottable (CompanyProfileTable_ID, HotspotTable_House_Name, 	HotspotTable_House_Hotspot_location, HotspotTable_House_Hotspot_location_Count, HotspotTable_Video, HotspotTable_Picture, HotspotTable_Text_Title, HotspotTable_Text_Subject, HotspotTable_Text_Content, HotspotTable_Text_OpenURL)
VALUES ('1', 'HNameSlytherin', 'HSpotLocation:Bethroom', '02', 'http://192.168.1.6/LuxHouseSystem/StreamingAssets/music2.mp4', 'http://192.168.1.6/LuxHouseSystem/StreamingAssets/picture2.jpg', 'TITLE: title of  the text', 'SUBJECT: subject of  the text', 'This is the full content of the text please read this part thank you', 'https://livra3d.com/')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>