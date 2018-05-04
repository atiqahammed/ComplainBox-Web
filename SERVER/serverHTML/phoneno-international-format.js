function phonenumber(inputtxt)
{
    var phoneno = /(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/;
    if(inputtxt.value.match(phoneno)) {
      return true;      
	  }
    
    else
    {
	    alert("Not a valid Phone Number");
	    return false;
    }
}
