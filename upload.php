<?php
require_once("require/start_session.php");
require_once("require/database.php");


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 0;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Kollar om det är ett image eller bara ett fake!
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        } if ($_FILES["fileToUpload"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        } if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        } else {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
if ($uploadOk == 0 ) {
    echo "Your file was not uploaded!";
    sleep(3);
    header("location: index.php");
    $_SESSION["img_error"] = 1;
} else {
    $desc = mysqli_real_escape_string($conn ,$_POST["desc"]);
    if (strlen($desc) > 1000) {
        $_SESSION["descerr"] = 1;
    } else {
    $filename = tempnam('uploads/', 'img');
    unlink($filename);
    $period_position = strrpos($filename, ".");
    $filename = substr($filename, 0, $period_position);
    $file = substr($filename, -7);
 if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $filename)) {  
     echo "The file has been uploaded.";
     $useruploading = $_SESSION["user_id"];
     $date = date("Y-m-d");
     $sql = "INSERT INTO imgs (images, date, description, userid) VALUES ('$file', '$date', '$desc', '$useruploading')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
     sleep(5);
     $_SESSION['success'] = $uploadOk;
     header("location: index.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
        $_SESSION["img_error"] = 1;
    }
}
}
?>