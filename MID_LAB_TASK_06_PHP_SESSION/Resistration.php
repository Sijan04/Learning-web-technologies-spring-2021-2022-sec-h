<?php 

    
       $uerror = "";
       $myname = "";

       if(isset($_REQUEST['submit'])){

              if($_REQUEST['myname'] == null){
                     $uerror  = "invalid username...";
              }else{
                     $myname = $_REQUEST['myname'];
              }
       }      
        

?>

<html>
        <body>
             <form method="POST" action="#">
              <fieldset>
                        <legend>NAME</legend>
                       

                    
        <table>
            <tr> <td> <input type="text" name="myname" value="<?=$myname ?>"></td></tr><br>
            
             <td><?$uerror ?></td>
            <tr><td><hr></td></tr>
            <tr> <td><input type="submit" name="submit" value="submit"><td></td>
     </table>       
                 </fieldset>
            </form>     
        </body>

<html>
       <head>
       <title>Email</title>
</head>

<body>
<form method="POST" action="#">
    <tr>


<td>Email</td><br>
<input type="Email" value="" /><br></td>
 <td><?$uerror ?></td>
<input type="Submit" name="Submit" value="Submit">
    </tr>
</body>
</html>
