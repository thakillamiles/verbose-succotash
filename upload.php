
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "<center><p>Sorry, file already exists/there was no file selected.</p></center>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<center><p>Sorry, your file is too large.</p></center>";
    $uploadOk = 0;
}

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<center><p>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</p></center>";
}
