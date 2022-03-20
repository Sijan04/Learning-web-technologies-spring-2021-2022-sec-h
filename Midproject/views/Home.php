<?php 

    require_once('header.php')

?>

<html>
     <head>
          <title>Home</title>
     </head>

     <body>

        <table border="1", width="100%">
                <tr>
                    <td align="left"><img src="../asset/<?php echo $_COOKIE['file'] ?>" height ="100px" width="100px"><h3>Hospital Portal</h3></td>
                    
                    <td align="right" width="1500px">
                        <b>Welcome <?php echo $_COOKIE['loggedInUsername'] ?></b> |
                        <b><a href="Home.php">Home</a></b> |
                        <b><a href="showPro.php">Show Profile</a></b>  |
                       
                        <b><a href="../controller/logout.php">LogOut</a></b>
                    </td>

        
                </tr>
                <tr height ="500px">
                  
                  <td width="200px" colspan="3" >
                      <table align="left" width="1000px" >
                           <tr>
                             <ul>
                            
                             <td><h3><a href="Admin.php" ><li> Admin Profile Informations</a></h3></td>
                                               
                                        
                           </tr>
                      
                          <tr>
                            <td><h3><a href="showListTSP.php"><li> Account Office Informations</li></a></h3></td>
                            <td><h3><a href="InventoryMan.php"><li>Inventory Manager Informations</li></a></h3></td>
                            <td><h3><a href="About.php"><li>About Hospital</li></h3></td>        
                          </tr>       
                          </ul>
                      </table>
                  </td>
                 
                </tr>
        </table>

     </body>




</html>