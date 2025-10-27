<?php
/* ----------- File upload ---------- 
    File upload is the ability to upload files to the server.
    PHP has a superglobal array called $_FILES that is used to upload files.
    The $_FILES array contains information about the uploaded file.
      - $_FILES['file']['name'] - The name of the uploaded file.
      - $_FILES['file']['type'] - The type of the uploaded file.
      - $_FILES['file']['size'] - The size of the uploaded file.
      - $_FILES['file']['tmp_name'] - The temporary name of the uploaded file.
      - $_FILES['file']['error'] - The error code of the uploaded file.
    To upload a file, you need to create a form with the enctype attribute set to "multipart/form-data".
    The form must use the POST method.
    The form must contain an input element with the type attribute set to "file".
    The form must contain a submit button.
  */
/*
several files can be uploaded like images, pdf, docs, etc
but for security reasons, only certain file types should be allowed
    - file types can be validated by checking the file extension
    - file size can be validated by checking the file size
    - file can be moved to a permanent location using the move_uploaded_file() function
    - the move_uploaded_file() function accepts two parameters: the temporary file name and the target file name
    - the target file name is the location where the file will be moved to
    - the target directory must have write permissions
    - common file extensions: png, jpg, jpeg, gif, pdf, doc, docx, xls, xlsx, ppt, pptx, txt
    image files end with png, jpg, jpeg, gif
    pdf files end with pdf
    doc files end with doc, docx
    xls files end with xls, xlsx
    ppt files end with ppt, pptx
    txt files end with txt
    - file size is measured in bytes
    - 1KB = 1024 bytes
    - 1MB = 1024KB = 1048576 bytes
    - 1GB = 1024MB = 1073741824 bytes
    - 1TB = 1024GB = 1099511627776 bytes   

*/

$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
$message = '';

if (isset($_POST['submit'])) {
  // Check if file was uploaded
  if (!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name']; // original file name
    $file_size = $_FILES['upload']['size']; // file size in bytes
    $file_tmp = $_FILES['upload']['tmp_name']; // temporary file name
    $target_dir = "uploadinhere/" . $file_name; // target directory
    // Get file extension
    // explode() splits a string into an array by a delimiter
    // end() gets the last element of an array
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    echo $file_ext;
    echo "<br>";
    echo $file_size;
    echo "<br>";
    echo $file_tmp;
    echo "<br>";
    echo $target_dir;
    echo "<br>";

    // Validate file type/extension
    if (in_array($file_ext, $allowed_ext)) {
      // Validate file size
      if ($file_size <= 1000000) { // 1000000 bytes = 1MB
        // Upload file
        move_uploaded_file($file_tmp, $target_dir);

        // Success message
        echo '<p style="color: green;">File uploaded!</p>';
      } else {
        echo '<p style="color: red;">File too large!</p>';
      }
    } else {
      $message = '<p style="color: red;">Invalid file type!</p>';
    }
  } else {
    $message = '<p style="color: red;">Please choose a file</p>';
  }
}
var_dump($_FILES);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>
  <?php echo $message ?? null; ?>
  <br>
  <form action="<?php echo htmlspecialchars(
                  $_SERVER['PHP_SELF']
                ); ?>" method="post" enctype="multipart/form-data">
    <label for="file">Select image to upload:</label>
    <br>
    <input type="file" name="upload">
    <br>
    <br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>