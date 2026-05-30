<?php

$conn = mysqli_connect('localhost', 'root', '', 'picture');

// $title = $_POST['title'];
// $category = $_POST['category'];
// $sub= $_POST['sub'];
// $file = $_POST['file'];
// $url = $_POST['url'];
// $key = $_POST['key'];

$status = $statusMsg = '';
if(isset($_POST['submit'])){
    $status = 'error';
    if(!empty($_FILES["image"]["name"])){
        $fileName = basename($_FILES["image"]["name"]);
        $destination = 'uploads/'.$fileName;
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        //Allow Types
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if(in_array($fileType, $allowTypes)){
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            move_uploaded_file($image,$destination);
            $title = $_POST['title'];
            $category = $_POST['category'];
            $sub= $_POST['subcategory'];
            $url = $_POST['url'];
            $key = $_POST['metakey'];
            //Insert image content into Database
            $sql = "INSERT INTO `post` (`id`, `title`, `category`, `subcategory`, `file`, `url`, `metakey`) VALUES ('id', '$title', '$category', '$sub', '".$imgContent."', '$url', '$key')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $status = 'success';
                $statusMsg = 'File Upload Successfully';
            }else{
                $statusMsg = 'File Upload Failed, Please try again';
            }
            }else{
            $statusMsg = 'Sorry, Only JPG, PNG, JPEG, GIF files are allowed to upload';
        }
    }else{
        $statusMsg = 'Please Select an image file to upload';
    }
}

// $title = $_POST['title'];
// $category = $_POST['category'];
// $sub= $_POST['sub'];
// $file = $_POST['file'];
// $url = $_POST['url'];
// $key = $_POST['key'];


// $sql = "INSERT INTO `upload` (`id`, `title`, `category`, `subcategory`, `file`, `url`, `metakey`) VALUES ('id', '$title', '$category', '$sub', '$file', '$url', '$key')";

// $result = mysqli_query($conn, $sql);
// if($result){
//     header('location: posts.php');
// }
?>