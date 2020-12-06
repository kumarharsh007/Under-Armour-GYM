<?php

//specifying servernam and login credentials for my sql server
$servername = "localhost";
$username = "root";
$passwrod = "";
$dbName = "quest";
 
//Create Connection
$con = mysqli_connect($servername,$username,$passwrod);

//check connection
if (mysqli_connect_errno()){
    echo "Failed To Connect To Server";
    exit();
}


// Make my_db the current database
// If database is not exist create one
if (!mysqli_select_db($con,$dbName)){
    $sql = "CREATE DATABASE ".$dbName;
    if ($con->query($sql) === TRUE) {
        //when database created successfull
    }else {
        echo "<br>";
        echo "Error creating database: " . $con->error;//displaying the error in creating database
    }
}
else if (mysqli_select_db($con,$dbName)){ // if the database is already exists
}

$tbName = "dataofusers";//Table Name
$var = "SELECT 1 FROM ".$tbName;//Checking For Table Is Exist Or Not
if ($con->query($var) == TRUE)
{
    
}
else if ($con->query($var) == FALSE)//Creating Table If Not Exist
{
    $sql = "Create table ".$tbName." (profession Varchar(100), username varchar(100),PASSWORD Char(40),PHONE Varchar(10),Primary key (USERNAME))";
    if ($con->query($sql) == True)
    {
        
    }
}
else {//Showing Error If There Is Any Error In Creating Table
    echo "<br>";
    echo "Error In Creating Table".$con->error;
}
//closing the connection to database
?>