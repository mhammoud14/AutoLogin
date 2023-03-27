<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
    
    $a_users=array("john.doe","jane.doe","johnny.doe");
    $a_status=array("0","1","1");
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/my_styles.css"> 
        <link rel="stylesheet" href="../css/icons.css"> 
        <script>
            // alert("my first javascript!"); 
         </script>
        <title>
            My 1st page
        </title>
    </head>
    <body>
    <div class="row header " >
            <div id="dropdown">
                <span><i class='icon'></i>MENU</span>            
                <div class="dropdown-content">
                    <ul>
                        <a href="list_users.php">
                        <li class="dropdown-item">
                            Users' List
                        </li>
                        </a>
                        <a href="page1.php">
                        <li class="dropdown-item">
                            Page 1
                        </li>
                        </a>
                        <a href="page2.php">
                        <li class="dropdown-item">
                            Page 2
                        </li>
                        </a>
                        <a href="page3.php">
                        <li class="dropdown-item">
                            Page 3
                        </li>
                        </a>
                    </ul>
                </div>
              </div>
              <div id="user-welcome">welcome <?php echo $_SESSION["username"]; ?>
              <button onclick="window.location.replace('http://127.0.0.1/csc443');">Log Out</button>
              </div>
        </div>
        <div >
            <h3>Page 1</h3>
        </div>        
    <div style="width: 30%;">
        <div style="text-align: center;">
            <span>Users List</span>
        </div>
        
        <div style="width: 50%; float: left;">
            <div class="table-cell table-header">Username</div>
        </div>
        <div style="width: 50%; float: left;">
            <div class="table-cell table-header">Status</div>
        </div>

        <?php 
         for ($i=0;$i<sizeof($a_users);$i++){
            echo '<div style="width: 50%; float: left;">
                    <div class="table-cell">'.$a_users[$i].'</div>
                </div>';
            ?>
            
            <div style="width: 50%; float: left;">
                <div  class="table-cell">
            <?php
            if ($a_status[$i]){
                echo "Active";
            }else{
                echo "inactive";
            }
            ?>
                </div>
            </div>
            <?php
        }
        ?>
        
        
    </div>   
    
    
</body>
</html>