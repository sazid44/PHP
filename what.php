<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document </title>
</head>
<body>
<form action="welcome.php" method="GET" enctype="multipart/form-data"> >
        <fieldset>
            <legend>Personal Information</legend>
           
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
       <label for='a'>Firstname:</label>
<input type="text" name="name" placeholder='Enter your first name' id='a'/><br><br>
<label for='br'>Email:</label>
<input type="text" name="email" autofocus required id='b'/><br><br>
<label for='c'>Date:</label>
<input type='date' value='date' id='c'/><br><br>
<label for='d'>Time:</label>
<input type='time' value='time' id='d'/><br><br>
<label for='e'>Color:</label>
<input type='color' value='color' id='e'/><br><br>
<input type='submit' value='submit'/>

</fieldset>




</body>
</html>