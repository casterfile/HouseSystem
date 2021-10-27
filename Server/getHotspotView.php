<?php 
require 'Connection.php';


//Query Data from the database
$sql = "SELECT * FROM hotspottable WHERE HotspotTable_House_Hotspot_location_Count=".$_GET['HotspotTable_House_Hotspot_location_Count'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["CompanyProfileTable_ID"]. 
    "|" . $row["HotspotTable_House_Name"]. 
    "|". $row["HotspotTable_House_Hotspot_location"].
    "|". $row["HotspotTable_House_Hotspot_location_Count"]. 
    "|". $row["HotspotTable_Video"]. 
    "|". $row["HotspotTable_Picture"]. 
    "|". $row["HotspotTable_Text_Title"]. 
    "|". $row["HotspotTable_Text_Subject"]. 
    "|". $row["HotspotTable_Text_Content"]. 
    "|". $row["HotspotTable_Text_OpenURL"]. 
    "|". $row["HotspotTable_ID"]. 
    "|". $row["Hotspottable_Hotspot_Icon"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>