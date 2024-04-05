<?php
$upload_dir = '../downloads/';
$filebase = basename($_FILES["fileToUpload"]["name"]);
$target_file = $upload_dir . basename($_FILES["fileToUpload"]["name"]);
$thefile = $_FILES["fileToUpload"]["name"];
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($thefile,PATHINFO_EXTENSION));

echo "Target path and file: " . $thefile . "<br>";
echo "Extension: " . $imageFileType . "<br>";

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image. <br>";
    $uploadOk = 1;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists. <br>";
  $uploadOk = 0;
}

// Check file size 500 MB (in Bytes)
if ($_FILES["fileToUpload"]["size"] > 500000000) {
  echo "Sorry, your file is too large (500 MB). <br>";
  $uploadOk = 0;
}

if ($uploadOk == 0){
  echo "Sorry, your file: " . $_FILES["fileToUpload"]["name"]. " was not uploaded to the Folder: " . $upload_dir . " Because it is to big or already exists<br>";
}
else {
  echo "Filesize: " . round($_FILES["fileToUpload"]["size"]/1000000,2) . " MB<br>";
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  }
  else {
    echo "Sorry, there was an error uploading your file.<br>";
  }
}

echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";
?>

