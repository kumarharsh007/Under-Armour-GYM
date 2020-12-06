<?php
session_start();//starting session
include ('user_conn.php');//including php file for connection to database
if ($_SERVER['REQUEST_METHOD'] === 'POST')//when a particulat submit button clicked
{
    if (isset($_REQUEST['register']))//when a server goes to particular request
    {
        if (isset($_REQUEST['username']) || isset($_REQUEST['password']))
{
    $uname = $_REQUEST['username'];//taking user inputs
    $pass = $_REQUEST['password'];
    $profe = $_REQUEST['fess'];
    $_SESSION['uname'] = $uname;//passsing them to session variables
    $_SESSION['pass'] = $pass;
    $_SESSION['pass'] = md5($_SESSION['pass']);//converting them to hash password
    $_SESSION['profe'] = $profe;
    $sql = "select * from dataofusers where username = '$_SESSION[uname]' and password = '$_SESSION[pass]' and profession = '$_SESSION[profe]'";//sql query
    $result = mysqli_query($con,$sql);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 1)//if sql query is true
    {
        if ($_SESSION['profe'] == 'Admin')//if profession is admin
        {
            echo "<script>alert('Login Successfull!!!, Welcome $_SESSION[uname] As Admin');window.location.href='start.html';</script>";
        }
        else if ($_SESSION['profe'] == 'Trainner')//if profession is faculty memeber
        {
            echo "<script>alert('Login Successfull!!!, Welcome $_SESSION[uname] As Trainner');window.location.href='start.html';</script>";
        }
        else if ($_SESSION['profe'] == 'User')//if profession is student
        {
            echo "<script>alert('Login Successfull!!!, Welcome $_SESSION[uname] As User');window.location.href='start.html';</script>";
        }
    }
     else {//other wise invalid
        echo "<script>alert('OPPS,Invalid UserName Or Password Or Profession!!!');window.location.href='seminar_login.php';</script>";
    } 
}   
}
else {
    echo "<script>alert('Going To Sign Up Page!!!');window.location.href='seminar.php';</script>";
}
}
session_destroy();
?>
<html>
    <head>
        <title>Login Form</title>
    </head>
<body style = "background-image: url(newbg.jpg);"><br><br><br><br><br><br><br><br><br><br>
<form name = "f1" action = "seminar_login.php" method = "POST"><!--Simple Html For Form-->
   <table align = "center" style = "border : 5px solid black;font-size : 30px;border-radius: 15px 15px 0 0;">
       <tr>
           <th colspan = 2 style = "border : 2px solid black; border-collapse : collapse;color:white;background-color: rgb(0, 0, 0, 6);border-radius: 15px 15px 0 0;">Login Form</th>
       </tr>
       <tr>
           <th style = "border : 2px solid black; border-collapse : collapse;color : white;">Profession :</th>
           <th>
           <select name = 'fess' style = "width : 375px;border : 2px solid black; border-collapse : collapse;font-size : 30px;">
                    <option value = 'Admin'>Admin</option>
                    <option value = 'Trainner'>Trainner</option>
                    <option value = 'User'>User</option>
                </select>
           </th>
       </tr>
       <tr>
           <th style = "border : 2px solid black; border-collapse : collapse;color : white;">UserName :</th>
           <th><input type = "text" name = "username" placeholder = "Your User Name Here" style = "font-size : 30px" autofocus></th>
       </tr>
       <tr>
           <th style = "border : 2px solid black; border-collapse : collapse;color : white">Password :</th>
           <th><input type = "password" name = "password" placeholder = "Password Here" style = "font-size : 30px"></th>
       </tr>
       <tr>
           <th style = "border : 2px solid black; border-collapse : collapse;border-radius: 15px 15px 0 0;"><input type = 'reset' value = 'Reset' style = "width : 167px;font-size : 18px;border-radius: 15px 15px 0 0;"></th>
           <th style = "border : 2px solid black; border-collapse : collapse;border-radius: 15px 15px 0 0;"><input type = 'submit' value = 'Sign Up' name = 'register1' style = "width : 187px;font-size : 18px;border-radius: 15px 15px 0 0;"><input type = 'submit' value = 'Login' name = 'register' style = "width : 187px;font-size : 18px;border-radius: 15px 15px 0 0;"></th>
       </tr>
  </table>
</body>
</html>

