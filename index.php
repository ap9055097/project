<html>


<head>
<!-- <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script> -->

<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"></script>

<script>
    //const firebase = require("firebase");
    // Required for side-effects
   // require("firebase/firestore");
   // var db = firebase.firestore();
</script>
</head>

<table>
    <body>
        <?php for($i =1;$i<=10;$i++){ 
        if(number_format($i/2,0)== $i/2){?>
        <tr>
        <td bgcolor='#fff32f'>tsetse</td>
        </tr>
        <?php }else{ ?>
        <tr>
        <td bgcolor='#23f32f'>cvxfv</td>
        </tr>
        <?php }} ?>
    </body>
</table>
<br>

<body>
<form action="result.php" method='get'>
    input code <input name='input'>
    <button type='submit'>submit</button>
</form>

<form action="result2.php" method='get'>
    decode <input name='input'>
    <button type='submit'>submit</button>
</form>

<form action="result3.php" method='get'>
    test <input name='input' type='number'>
    <button type='submit'>submit</button>
</form>
<br>
<form action="result4.php" method="post">
        VAL 1 : <input type="text" name="valin[]"><br>
        VAL 2 : <input type="text" name="valin[]"><br>
        VAL 3 : <input type="text" name="valin[]"><br>
        VAL 4 : <input type="text" name="valin[]"><br>
        VAL 5 : <input type="text" name="valin[]"><br>
        VAL 6 : <input type="text" name="valin[]"><br>
        VAL 7 : <input type="text" name="valin[]"><br>
        VAL 8 : <input type="text" name="valin[]"><br>
        VAL 9 : <input type="text" name="valin[]"><br>
        VAL 10 : <input type="text" name="valin[]"><br>
        <input type="submit" value="submit">
</form>


    test <input id='inputtext' name='inputtext' type='text' value='aaaa'>
    <button type='submit' id="save">save</button>
<br>

<h1 id='h'>test</h1>


<script type="text/javascript" src="/encode/test.js"></script>

test <input id='num' name='num' type='text' value='' onChange="show(this.value)">




<script>
function show(input)
{
var text="complete";
for(var i=0 ;i<input.length;i++)
{
    var c = true;
    for(j=0;j<10;j++)
    {
        if(input.substring(i,i+1) == j) c = false;
    }
    if(c) text="fail";
}
alert(text);
}
</script>


<form action="333.php" method="post">
        VAL 1 : <input type="text" name="valin[]"><br>
        VAL 2 : <input type="text" name="valin[]"><br>
        <input type="submit" value="submit">
</form>


</body>

</html>