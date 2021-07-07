<?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        $name = $_FILES['file']['name']; // find file name
        $tmp_name = $_FILES['file']['tmp_name']; // find file tmp_name
        $size = $_FILES['file']['size']; // find file size
        $error = $_FILES['file']['error']; // find file errors

        // array.split
        $tempExtension = explode('.', $name);

        $fileExtension = strtolower((end($tempExtension)));

        // allowed extensions
        $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileExtension, $isAllowed)) {
            // there's no error
            if ($error === 0) {

                if ($size < 30000) {
                    $newFileName = uniqid('', true) . ".$fileExtension";
                    $fileDestination = "uploads/" . $newFileName; 
                    move_uploaded_file($tmp_name, $fileDestination);
                    header("Location: files.php?uploadedsuccess");
                } else {
                    echo "Sorry, your final size is too big!";
                }

            } else {
                echo 'Sorry, your file type is not accepted ';
            }
        } else {
             echo "Sorry, there was an error";
        }
    }

?>