<?php

session_start();

function showHeader(){
        $returnString = <<<HEADSTRING
        <html>
            <head>
                
                <link rel = "stylesheet" type = "text/css" href = "StyleSheet.css">
                
                <script>
                function logout(){
                    document.location="Logout.php";
   
                }
                </script>
            </head>
        <body>
 
HEADSTRING;
     return $returnString;
    }
     
function showFooter(){
    $returnString = "\t</body>\n";
    $returnString .= "</html>";
    return $returnString;
}

        $hostname = 'localhost';       
        $databasenaam = 'projectquilt';
        $username = 'root';
        $password = '';
       
    
        $conn = mysqli_connect($hostname, $username, $password, $databasenaam);
                
        if (!$conn){
            die("DB failed to connect" . mysqli_error($conn));

        }
      
        
        
        
        
?>
 
        <script>
                
       
        </script>
      
        <header>
            <img src="PHP.png" width="45" height="45"style="float:left">
            Fabric forms  
            <br>  
        <a class= "subtxt"> Quilts with love</a> </header>        
        
        
        <nav>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li style="float:right"><a id="logout" href="Logout.php">Logout</a></li>
                <li style="float:right"><a onclick="login()"  id="login" href="inlog.php" >Login</a></li>
            </ul>
        </nav>


<?php

        echo showFooter();
?>

