<?php
    $target_dir = "/home/reqi/SOA_DOC/UPLOADAN";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 10000000) {
        echo "<script type='text/javascript'>
                            alert('Sorry, your file is too large.');
                            document.location='index.php';
                      </script>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script type='text/javascript'>
                            alert('Sorry, your file was not uploaded.');
                            document.location='index.php';
                      </script>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<script type='text/javascript'>
                            alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.');
                            document.location='index.php';
                      </script>";
        } else {
            echo "<script type='text/javascript'>
                            alert('Sorry, there was an error uploading your file.');
                            document.location='index.php';
                      </script>";
        }
    }
?>
