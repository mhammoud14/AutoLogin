<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/my_styles.css"> 
        <link rel="stylesheet" href="../css/icons.css"> 
        <script>
            // alert("my first javascript!"); 
         </script>
        <title>
            My 2nd page
        </title>
    </head>
    <body>
        <div class="row header center-menu" >
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
        

                              
              <div id="user-welcome">welcome <?php echo $_SESSION["username"]; ?></div>              
        </div>
        
        <div class="title">
            <span>Page 2</h1>
        </div>
        <img src="../images/image2.jpg" class="image-profile">
        <h2>Paragraph using p:</h2>
        <p> The market requirements for a web full stack developer are not properly aligned with the academic resources currently being taught. This specialization is designed to build full-stack developers ready to take on the market. it bridges the gap between academia and the software web development industry. The courses in this specialization are not academic courses, but workshops inspired by the requirement of the different web development jobs available in the market. 
            Skills 
        </p>
        <h2>Bullets:</h2>
        <ul>
            <li>
                item 1
            </li>
            <li>
                item 2
            </li>
            <li>
                item 3
            </li>
        </ul>

        <ol>
            <li>
                item 1
            </li>
            <li>
                item 2
            </li>
            <li>
                item 3
            </li>
        </ol>
        
        <h2>Table:</h2>
        <table border="1">
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Name
                </td>
                <td>
                    Email
                </td>
            </tr>
            <tr>
                <td>
                    1
                </td>
                <td>
                    John Doe
                </td>
                <td>
                    john.doe@webdev.com
                </td>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td>
                    Janette Doe
                </td>
                <td>
                    janette.doe@webdev.com
                </td>
            </tr>
        </table>
        
        <h2>Divs and Spans:</h2>
        <div style="
        margin:5px;
        font-size: 20px;
        font-family: arial;
        color: #0ba316;
        padding-bottom: 10px;
        padding-top: 10px;
        padding-left: 5px;
        padding-right: 5px;
        border: 2px dotted #f44336;">
            1st div
        </div>
        <div  style="
        margin:5px;
        font-size: 20px;
        font-family: arial;
        color: #0ba316;
        padding-bottom: 10px;
        padding-top: 10px;
        padding-left: 5px;
        padding-right: 5px;
        border: 2px dotted #f44336;">
            1st span
    </div>
    <div style="width: 50%; float: left;">
        <div class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi dolor labore eos iure obcaecati aspernatur. Labore, accusantium laborum quisquam adipisci tenetur illum, voluptas, voluptatibus doloribus tempora non cum dolorem!</div>
    </div>
    <div style="width: 50%; float: right;">
        <div  class="paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi dolor labore eos iure obcaecati aspernatur. Labore, accusantium laborum quisquam adipisci tenetur illum, voluptas, voluptatibus doloribus tempora non cum dolorem!</div>
    </div>
    <div style="width: 50%; float: right;">
        <div  class="paragraph paragraph-blue">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi adipisci maxime esse quibusdam, ab hic dolorem illum laboriosam sed aliquam qui! Suscipit omnis reiciendis fugit et dolore, vel provident molestiae?</div>
        <div  class="paragraph  paragraph-blue">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi adipisci maxime esse quibusdam, ab hic dolorem illum laboriosam sed aliquam qui! Suscipit omnis reiciendis fugit et dolore, vel provident molestiae?</div>    
        <div  class="paragraph  paragraph-blue">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi adipisci maxime esse quibusdam, ab hic dolorem illum laboriosam sed aliquam qui! Suscipit omnis reiciendis fugit et dolore, vel provident molestiae?</div>
        <div  class="paragraph  paragraph-blue">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi adipisci maxime esse quibusdam, ab hic dolorem illum laboriosam sed aliquam qui! Suscipit omnis reiciendis fugit et dolore, vel provident molestiae?</div>        
    </div>

    <div style="width: 50%; float: left;">       
        <img src="../images/image1.jpg" class="img-container"> 
        <img src="../images/image2.jpg" class="img-container">
        <img src="../images/image3.jpg" class="img-container">
    </div>

</body>
</html>