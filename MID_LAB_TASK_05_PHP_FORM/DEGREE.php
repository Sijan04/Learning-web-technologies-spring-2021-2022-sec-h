<?php 

    
       $uerror = "";
       $myname = "";

       if(isset($_REQUEST['submit'])){

              if($_REQUEST['checkbox'] == null){
                     $uerror  = "invalid username...";
              }else{
                     $myname = $_REQUEST['checkbox'];
              }
       }      
        

?>

<html>
        <body>
             <form>
             <fieldset>
              
               <legend>DEGREE</legend>
                       <table>
                                 <tr>
                                         
                                    <td align="center"><input type="checkbox" name="ssc" value="<?=$rr ?>">SSC</td>
                                    <td align="center"><input type="checkbox" name="hsc" value="<?=$rr ?>">HSC</td>
                                    <td align="center"><input type="checkbox" name="bsc" value="<?=$rr ?>">BSc</td>
                                    <td align="center"><input type="checkbox" name="msc" value="<?=$rr ?>">MSc</td>
                                </tr>
                                 
                                 <tr><td><?$uerror ?></td></tr>
                                 
                                 <tr>
                                      <td colspan="4"><hr></td>
                                 </tr>
                                 <tr>
                                        
                                        <td colspan="4"><input type="submit" name="submit" value="submit"></td>
                                 </tr>
                       </table>
                 </fieldset>     
            </form>     
        </body>
</html