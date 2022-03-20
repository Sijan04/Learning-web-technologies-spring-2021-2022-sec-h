<?php
	session_start();

	if(isset($_POST['edit']))
    {
		
		if($_POST['userid'] != ""  )
		{
			$myfile = fopen('../model/Doctoruserandedit.txt', 'a');
                 $user = $_POST['userid']."|".$_POST["username"]."|".$_POST["password" ]."|".$_POST["email" ]."|".$_POST['salary']."|".$_POST['add']."|".$_POST['Room'].";"."\r\n";

                     fwrite($myfile, $user);
                     fclose($myfile);
					   


                     header('location: ../views/CEOhome.php');
				    
}
		
	}
?>