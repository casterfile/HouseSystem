<?php
   if(isset($_FILES['theFile']))
   {
      print("Success! ");
      print("tmpName: " . $_FILES['theFile']['tmp_name'] . " ");
      print("size: " . $_FILES['theFile']['size'] . " ");
      print("mime: " . $_FILES['theFile']['type'] . " ");
      print("name: " . $_FILES['theFile']['name'] . " ");

      //Removing None Important Character
      $_FILES['theFile']['name'] = str_replace("=0A?=","",$_FILES['theFile']['name']);
      print("name2: " . $_FILES['theFile']['name'] . " ");
   
      move_uploaded_file($_FILES['theFile']['tmp_name'], "../StreamingAssets/".$_FILES['theFile']['name'].".jpg");
   } 
   else
   {
      print("Failed!");
   }
?>