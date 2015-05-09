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
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
            session_destroy();
        } if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
            session_destroy();
        } if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
            session_destroy();
        } else {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
        session_destroy();
    }
}
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

echo random_string(50);
if ($uploadOk == 0 ) {
    echo "Your file was not uploaded!";
    sleep(3);
    header("location: index.php");
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
     $sql = "INSERT INTO imgs (images, date, userID) VALUES ('$file', '$date', '$useruploading')";
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
        session_destroy();
    }
}
?>