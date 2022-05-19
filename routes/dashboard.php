<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<html>
    <head>
        <title>3L voting system - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            <h1>3L Voting System</h1>  
            </div>
            </center>
            <hr>

            <div id="mainSection">
                <div id="profileSection">
                    <br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                
                </div>
                
            </div> 
    </body>
</html>
