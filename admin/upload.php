<?php
    include('includes/config.php');
    if(isset($_POST['submit']))
    {
        $title=$_POST["title"];
        $description=$_POST["description"];
        $image=$_FILES["image"]["name"];
        $name=$_POST["name"];

    }
    try
    {
        move_uploaded_file($_FILES["image"]["tmp_name"],"images".$_FILES["image"]["name"]);
        $stmt= $dbh->prepare("INSERT INTO tbl_gallery(title,description,image) VALUES(:title,:description,:image)");
        $stmt->bindParam(":title",$title);
        $stmt->bindParam(":description",$description);
        $stmt->bindParam(":image",$image);

        $stmt1= $dbh->prepare("INSERT INTO tbl_category(name) VALUES(:name)");
        $stmt1->bindParam(":name",$name);

        if($stmt->execute() AND $stmt1->execute())
        {
            echo $msg="<script>alert(Gallery Created Successfully);<script>";
            echo $error="<script>window.open('managegallery.php','_self')</script>";
        }else
        {
            echo "Something went wrong...";
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>