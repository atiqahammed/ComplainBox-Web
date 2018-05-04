<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8">
<title>JavaScript form validation - checking non-empty</title>
<link rel='stylesheet' href='form-style.css' type='text/css' />

<script>

    
function phonenumber(inputtxt)
{
    var phoneno = /(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/;
    if(inputtxt.value.match(phoneno)) {
      return true;      
    }
    
    else
    {
        alert("Not a valid Phone Number");
        //document.getElementsByName("submit").disabled = true;
        alert(document.getElementsByName("submit").value);

        return false;
    }
}

function testFunction()
{
    var phoneno = /(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/;
    if(document.getElementById("phone").value.match(phoneno)) {
      return true;      
    }

    else
    {
        alert("Not a valid Phone Number");
        document.getElementById("phone").value = "";
    }
}




</script>



</head>
<body onload='document.form1.text1.focus()'>
<div class="mail">
<h2>Input an Phone No.[xxx-xxx-xxxx, xxx.xxx.xxxx, xxx xxx xxxx] and Submit</h2>

<script type="text/javascript">
    alert("hello");
    //document.getElementById("submit").disabled = true;
    document.getElementById('submit').setAttribute("disabled","disabled");
</script>

<form name="form1" action="test2.php"> 

<input type="text" name="text" id="phone" onblur="testFunction()" required>
<input type="submit" name="submit" id="submit">



</form>
</div>
<!--<script src="phoneno-international-format.js"></script>

<ul>
<li><input type='text' name='text1'/></li>
<li>&nbsp;</li>
<li class="submit"><input type="submit"  name="submit" value="Submit" onclick="phonenumber(document.form1.text1)" required/></li>
<li>&nbsp;</li>
</ul>












-->
</body>
</html>
