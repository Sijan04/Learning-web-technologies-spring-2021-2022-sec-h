<?php
	session_start();

	if(isset($_POST['submit']))
    {
        
        
		if($_POST['username'] != "" || str_word_count($_POST['username'])>=2)
        {
			
                if($_POST["email" ] != "")
                {
				    if($_POST["date" ] != "")
                    {
                         if(isset($_POST['gender']))
                        {
                            if($_POST['add']!= "" && strlen($_POST['add']>2))
                            {
                                if($_POST['password']!= "")
                                {
                                    if($_POST['confirmpassword'] != "" &&  $_POST['password']==$_POST['confirmpassword'])
                                   {
                                         if($_POST['file'] != "")
                                         {
                               
                                           $myfile = fopen('../model/User.txt', 'a');
                                           $user = $_POST['username']."|".$_POST["email" ]."|".$_POST["date" ]."|".$_POST["gender" ]."|".$_POST['add' ]."|".$_POST['password' ]."|".$_POST['file' ]."|".";"."\r\n";

                                               fwrite($myfile, $user);
                                               fclose($myfile);
                                             
                                              $_FILES['file']['temp_file']=$user[7];
                                             $des='asset/'.$_FILES['file']['name'];
                                               move_uploaded_file($_FILES['file']['temp_file'],$des);
        

                                                  header('location: ../views/Login.html');
                                            
                                         }
                                         else
                                         {
                                             echo "<h1>Invalid picture!!</h1>";
                                         }

                                   }
                                   else
                                   {
                                       echo "<h1>Invalid Confirm Password!!!</h1>";
                                   }
                               }
                               else
                               {
                                echo "<h1>Invalid Password!!!</h1>"; 
                               }
                           }
                          else
                            {
                              echo "<h1>Invalid Address...</h1>";
                            }
                        }
                         else
                        {
                             echo "<h1>Invalid Gender...</h1>";
                        }
                    }
                    else
                    {
					   echo "<h1>Invalid Date of Birth...</h1>";
				    }

					
				}
                else
                {
					echo "<h1>Invalid  Email!!</h1>";
				}	
			
		}
        else
        {
			echo " <h1>Invalid Username!!</h1>";
		}
	}
?>