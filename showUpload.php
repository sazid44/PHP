<pre>
<?php
$image= $_FILES["fileToUpload"];
$fileName = $image["name"];
$fileType = $image["type"];
$fileTmpName = $image["tmp_name"];
$fileSize = $image["size"];

echo "file name:". $fileName;
echo "<br/>";
echo "file type:". $fileType;
echo "<br/>";
echo "file tmp_name:". $fileTmpName;
echo "<br/>";

$picSize= floor($fileSize/1000);
if($picSize<100){
	echo "file size:".$picSize ."KB";
}else
	echo "too large";

move_uploaded_file($fileTmpName,"images/$fileName");
echo "<br/>";
echo "<img src='images/$fileName'>";
?>
</pre>