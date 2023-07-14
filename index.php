<html>

<HEAD>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>(HIRD) Employee Concern Management system</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</HEAD>
<body>
<style>
    body {
  background-image: url('bg.jpg');
}

h1 {
  text-align: center;
  
 
  
 
}
h2 {
 
    text-align:center


}

</style>
<h1 style="background-color:rgb(255, 99, 71);">
    <br>
    (HIRD) Employee Concern Management System
    <a href="login.php">
    <button type="button" class="btn btn-primary btn-lg">Login</button>
    </a>
</h1>
<p>
    
   <br>
   <marquee  direction = "left" loop="" >
    <font size="5">
       
        (HIRD) is a type of Employee Concern that includes allegations of Harassment, Intimidation, Retaliation/Reprisal, or Discrimination for raising an Employee Concern.
    </font>
    </marquee>
</p>
<h2>
<font size="5">
    <br>
    <br>
    <br>
    To Raise your Concern Please Provide Your Employment ID Number Below
</font>

</h2>
<form name="input" action="fetchbyid.php" method="POST">

 <br>
    <center>EMPLOYMENT ID NUMBER:<input type="text" name="empid" required/></center>
    <br>
   <center><INPUT TYPE="SUBMIT" name="ID" VALUE="SUBMIT"/></center>
    
</form>


</body>
</html>