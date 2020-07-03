<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <form onsubmit="return false" action="" method="POST">
    <input type="text" name="usrName" id="name">
    <input type="text" name="usrPwd" id="pass">
    <input type="submit" name="subButton" id="SB">
    <input type="readonly" name="" id="readId">
     </form>
   <div id=spin></div>
   <script>

        $('#SB').click(function () {
    var myUsr=$('#name').val();
    var myPwd=$('#pass').val();
    $('#spin').html('<img src="images/spinner.gif" alt=""/>');
    setTimeout(function(){
        $.post('sendAjax.php',{uName:myUsr,uPwd:myPwd},function (mydata) {
      $('#readId').val('Hello');
      $('#spin img').remove();
    })
    }, 1000);
  
})


 


   </script>
</body>
</html>