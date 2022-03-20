<?php
	session_start();

	if(isset($_POST['submit']))
    {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != "")
		{
			if($password != "")
			{
				$myfile = fopen('../model/CEOuser.txt', 'r');
                

				while (!feof($myfile)) 
				{
					$data = fgets($myfile);
					$user = explode('|', $data);

					if(trim($user[0]) == $username && trim($user[1]) == $password)
					{
						setcookie('flag', 'true', time()+3600, '/');
                        

                        setcookie('username',$user[0],time()+3600,'/');
                        setcookie('password',$user[1],time()+3600,'/');
                        
                        
                        
					
						

						header('location:../views/CEOhome.php');
					}
                   
                    
                    
					else
					{
						echo"Invalid username/password";
					}
                  
				}
                
                
                
                

				

			}
            
             if($password != "")
                {
                    
                    $myfile1 = fopen('../model/User.txt', 'r');
                    
                    while(!feof($myfile1))
                    {
                        $data = fgets($myfile1);
					    $user = explode('|', $data);
                        
                    if(trim($user[0]) == $username && trim($user[5]) == $password)
					{
						setcookie('flag', 'true', time()+3600, '/');

						
                        setcookie('loggedInUsername',$user[0],time()+3600,'/');
                        setcookie('loggedEmail',$user[1],time()+3600,'/');
                        setcookie('loggedDate',$user[2],time()+3600,'/');
                        setcookie('loggedgender',$user[3],time()+3600,'/');
						setcookie('loggedadd',$user[4],time()+3600,'/');
                        setcookie('password',$user[5],time()+3600,'/');
                        setcookie('password',$user[5],time()+3600,'/');
                         setcookie('file',$user[6],time()+3600,'/');
                        setcookie('loggedpic',$user[7],time()+3600,'/');
						

						header('location:../views/Home.php');
					}
                    }
                }
            
			else
			{
				echo "<h1>Invalid Password...</h1>";
			}
		}
		else
		{
			echo "<h1>Invalid Username...</h1>";
		}
	}
?>