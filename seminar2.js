function showform(that){ //function of showin form when you want
    if(that.value == "Credit Card")//showing credit card and other will not display
    {
        document.getElementById("creditcard").style.display = "block";
        document.getElementById("debitcard").style.display = "none";
        document.getElementById("demanddraft").style.display = "none";
    }
    else if(that.value == "Debit Card") //showing debit card and other will not display
    {
        document.getElementById("creditcard").style.display = "none";
        document.getElementById("debitcard").style.display = "block";
        document.getElementById("demanddraft").style.display = "none";
    }
    else if(that.value == "Demand Draft") //showing demand draft and other will not display
    {
        document.getElementById("demanddraft").style.display = "block";
        document.getElementById("debitcard").style.display = "none";
        document.getElementById("creditcard").style.display = "none";
    }
}

function validateform(){//function for validation of form tags and attributes
    var x = document.forms["myform"]["user_name"].value;//if x is null ther exit function
    if ( x == "" || x == null)
    {
        alert("User Name Must Be Filled Out!!");
        //return false;
    }
    x = document.forms["myform"]["pass"].value;//if x is null ther exit function
    if ( x == "" || x == null)
    {
        alert("Password Must Be Filled Out!!");
       // return false;
    }
    x = document.forms["myform"]["first_name"].value;//if x is null ther exit function
    if ( x == "" || x == null)
    {
        alert("First Name Must Be Filled Out!!");
        //return false;
    }
    x = document.forms["myform"]["city"].value;//if x is null ther exit function
    if ( x == "" || x == null)
    {
        alert("City Name Must Be Filled Out!!");
        //return false;
    }
    x = document.forms["myform"]["email"].value;//if x is null ther exit function
    if ( x == "" || x == null)
    {
        alert("Email Must Be Filled Out!!");
        //return false;
    }
    x = document.forms["myform"]["phone"].value;//if x is null ther exit function
    if ( x == "" || x == null)
    {
        alert("Mobile Number Must Be Filled Out!!");
        //return false;
    }
    if(/^\d{10}$/.test(x) == false)//matching with not pattern [9461774146]
    {
        alert("Not Valid Phone Number");
        //return false;
    }
    //else if(/^\d{10}$/.test(x))//matching with pattern
    //{
      //  alert("Registered Successfully!!!");
        //return true;
    //}
    x = documnet.forms["myform"]["cardnumb1"].value;//if x is null ther exit function
    if ( x == "" || x == null)
    {
        alert("Card Number Must Be Filled Out!!");
        //return false;
    }
    x = documnet.forms["myform"]["cardnumb"].value;//if x is null ther exit function
    if(/^\(?([0-9]{4})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/.test(x) == false)//matching with [1234-1234-1234-1234] card number pattern
    {
        alert("Not Valid Card Number");
    }
    x = documnet.forms["myform"]["nameoncard"].value;//if x is null ther exit function
    if (x == "" || x == null)
    {
        alert("Card On Name Must Be Filled Out!!");
        //return false;
    }
    x = documnet.forms["myform"]["cvv"].value;//if x is null ther exit function
    if ( x == "" || x == null)
    {
        alert("CVV Must Be Filled Out!!");
        //return false;
    }
    x = document.forms["myform"]["cvv"].value;//if x is null ther exit function
    if(/^\(?([0-9]{3})\)$/.test(x) == false)//cvv must be of three digits only
    {
        alert("Not Valid CVV Number")
        //return false;
    }
}
