// JavaScript Document
function showaddress() {//Function for onchange 
    var str = document.getElementById("findgym").value;
    var xmlhttp = new XMLHttpRequest();//creating an object for xmlhttprequest
    xmlhttp.onreadystatechange = function () {//onreadystate
        if (this.readyState == 4 && this.status == 200) {//when ready state is ok
            document.getElementById("txtHint").innerHTML = this.responseText;//put text back to html page
        }
    };
    xmlhttp.open("GET", "getgym.php?q=" + str, true);//open php file for further operations
    xmlhttp.send();//send request
}