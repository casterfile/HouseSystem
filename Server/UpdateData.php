<?php 
require 'Connection.php';


// $sql = "INSERT INTO hotspottable (CompanyProfileTable_ID, HotspotTable_House_Name, 	HotspotTable_House_Hotspot_location, HotspotTable_House_Hotspot_location_Count, HotspotTable_Video, HotspotTable_Picture, HotspotTable_Text_Title, HotspotTable_Text_Subject, HotspotTable_Text_Content, HotspotTable_Text_OpenURL)
// VALUES ('1', 'HNameSlytherin', 'HSpotLocation:Bethroom', '02', 'http://192.168.1.6/LuxHouseSystem/StreamingAssets/music2.mp4', 'http://192.168.1.6/LuxHouseSystem/StreamingAssets/picture2.jpg', 'TITLE: title of  the text', 'SUBJECT: subject of  the text', 'This is the full content of the text please read this part thank you', 'https://livra3d.com/')";

//Update Data 
$sql = "UPDATE hotspottable SET HotspotTable_Video='http://192.168.1.6/LuxHouseSystem/StreamingAssets/music.mp4' WHERE HotspotTable_ID='3'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//Query Data from the database
$sql = "SELECT * FROM hotspottable WHERE HotspotTable_ID='3'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "CompanyProfileTable_ID: " . $row["CompanyProfileTable_ID"]. 
    " | HotspotTable_House_Name: " . $row["HotspotTable_House_Name"]. 
    " | HotspotTable_House_Hotspot_location" . $row["HotspotTable_House_Hotspot_location"].
    " | HotspotTable_House_Hotspot_location_Count" . $row["HotspotTable_House_Hotspot_location_Count"]. 
    " | HotspotTable_Video" . $row["HotspotTable_Video"]. 
    " | HotspotTable_Picture" . $row["HotspotTable_Picture"]. 
    " | HotspotTable_Text_Title" . $row["HotspotTable_Text_Title"]. 
    " | HotspotTable_Text_Subject" . $row["HotspotTable_Text_Subject"]. 
    " | HotspotTable_Text_Content" . $row["HotspotTable_Text_Content"]. 
    " | HotspotTable_Text_OpenURL" . $row["HotspotTable_Text_OpenURL"]."</br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>