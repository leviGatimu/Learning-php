<?php

$filename = $_FILES['myfile']['name'];
$tempname = $_FILES['myfile']['tmp_name'];

move_uploaded_file($tempname , "uploads/" .$filename);

echo "File was uploaded succesfully."
?>