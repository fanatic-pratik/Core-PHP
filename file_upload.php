<?php

//$_FILES['image']
// structure
// [
//   name,
//   type,
//   tmp_name,
//   error,
//   size
// ]


//$_FILES['image']['error']
//0  -  Success
//1  -  File too large(server)
//2  -  File too large(form)
//3  -  Partial upload
//4  -  No file uploaded


if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {

    $tmp  = $_FILES['image']['tmp_name'];
    $name = basename($_FILES['image']['name']);

    move_uploaded_file($tmp, "uploads/".$name);
}


?>
<html>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <button type="submit" name="submit" value="submit">Upload</button>
    </form>
</html>