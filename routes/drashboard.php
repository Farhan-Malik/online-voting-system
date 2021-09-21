<?php 

    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }

    $userdata = $_SESSION['userdata'];

?>


<html>
    <head>
         <title>Online Voting System - Drashboard</title>
         <link rel="stylesheet" href="../css/drashboard.css">
    </head>
    <body>

    <div id="mainSection">
     
         <div id="headerSection">
              <button id="back">Back</button>
              <button id="logout">Logout</button>
              <h1>Online Voting System</h1>
        </div>   
        
    
        <hr>
        <div id="Profile"> 
            <img src="../uploads/<?php echo $userdata['photo']?>"height="200" alt="200">
            <b>Name:</b><br><br>
            <b>Mobile:</b><br><br>
            <b>Address:</b><br><br>
            <b>Status:</b><br><br>
        </div>
         
        <div id="Group"></div> 



    </div>       
        
    </body> 
</html>