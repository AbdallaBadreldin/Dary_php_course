<?php
include "/xampp/htdocs/php_course/includes/functions.php";
$UPLOADED_FILE_SIZE = 400000;
// $allowedExtensions = array('image');

echo "post: ";
print_r($_POST);
echo "<br>"."files: ";
print_r($_FILES);
echo "<br>";

if (isset($_POST['submit'])) {
    echo 'Please try to follow the process';
} else if (!isset($_FILES['file'])) {
    echo 'Please, try to follow the process';
} else if (!isset($_FILES['file']['name'])) {
    echo 'Please, can you upload right file ?';
} else if (!($_FILES['file']['error'] === 0)) {
    echo 'Please, can you try to upload file again ?';
} else if (!($_FILES['file']['size'] < $UPLOADED_FILE_SIZE)) {
    echo 'Please, can you upload smaller file ?';
} else if(!(explode('/',$_FILES['file']['type'])[0]==="image")) {
    echo 'please,uplaod image'; 
}
else{
    //here we can process with our image upload
    moveImagesToUploadsFolder();
}
?>