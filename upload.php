<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>UPLOAD</title>
</head>
<body>
     <form>
     <br>
     <div>
     <input type="file" id="file" name="filename">
     </div>
     <input type="submit" id="btnsubmit" name="btnsubmit">
     </div>
     </form>
  <?php
if(isset($POST['btnsubmit'])){
        $file_name =$_FILES['photo']['name'];
        $file_name =$_FILES['photo']['size'];
        $file_name =$_FILES['photo']['tmp_name'];
        $file_name =$_FILES['photo']['type'];
        echo  $file_name;
        echo "<br>". $file_size;
        echo "<br>". $file_tmp;
        echo "<br>". $file_type;
      move_upload_file ($file_tmp,"img/".$file_name);

}
?>
</body>
</html>