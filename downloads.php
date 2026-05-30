<?php
// $connect = new PDO("mysql:host=localhost;dbname=picture", "root", "");
// if (isset($_GET['image'])) {
//     $id = $_GET['image'];
//     $query = "SELECT * FROM `post` WHERE id= '$id'";
//     $statement = $connect->prepare($query);
//     $statement = bindParam(1,$id);
//     $statement->execute();
//     $result = $statement->fetchAll();

//     $file = mysqli_fetch_assoc($result);
//     if(file_exists($file)){
//         header('Content-Disposition: name="'.basename($file).'"');
//         header('Content-Type:'.$result['mime']);
//         header ('Content-Length:'.filesize($file));
//         readfile($file);
//         exit;
        
//     }
$conn = mysqli_connect('localhost', 'root', '', 'picture');
    if (isset($_GET['image'])) {
        $id = $_GET['image'];
        
        $sql = "SELECT * FROM `post` WHERE id='$id' ";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)== 0){
            die("File does not exists.");
        }
        $row = mysqli_fetch_object($result);
        header("Content-type:" .$row->title);
        echo $row->file;

        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/'.$file['name'];
    
        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('uploads/'.$file['name']));
            readfile('uploads/' . $file['name']);
    
            // Now update downloads count
            $newCount = $file['downloads'] + 1;
            $updateQuery = "UPDATE post SET downloads=$newCount WHERE id='$id'";
            mysqli_query($conn, $updateQuery);
            exit;
        }
        } 
    
?>
