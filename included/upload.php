<?php
    session_start();
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'phpproject01');

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;
    $destination2 = 'thumbnails/' . $filename;
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];


    move_uploaded_file($file, $destination);
    
    //getting the image dimensions
    list($width, $height) = getimagesize($destination);

    //saving the image into memory (for manipulation with GD Library)
    $myImage = imagecreatefromjpeg($destination);

    // calculating the part of the image to use for thumbnail
    if ($width > $height) {
  $y = 0;
  $x = ($width - $height) / 2;
  $smallestSide = $height;
    } else {
    $x = 0;
    $y = ($height - $width) / 2;
    $smallestSide = $width;
    }

    // copying the part into thumbnail
    $thumbSize = 25;
    $thumb = imagecreatetruecolor($thumbSize, $thumbSize);
    imagecopyresampled($thumb, $myImage, 0, 0, $x, $y, $thumbSize, $thumbSize,$smallestSide,$smallestSide);
    
    //move_uploaded_file($thumb, $destination2);
    $path_thumb = 'thumbnails/'.$filename;
    //final output
    imagejpeg($thumb, $path_thumb);
    //move_uploaded_file($path_thumb, $destination2);
    //echo $destination2;
    // echo $path_thumb;
    $_SESSION['thumb_path'] = $path_thumb;
    header("location: ../profile.php?error=no");
    
}