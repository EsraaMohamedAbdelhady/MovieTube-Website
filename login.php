<?php

session_start();
$connection = new mysqli("localhost", "root","","visitors");

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['pswd'];

		if(!empty($email) && !empty($password))
		{

			$query = "select * from viewers where email = '$email' && password='$password'";
			$result = mysqli_query($connection, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password && $user_data['email']===$email)
					{
						echo ("<script>
                        window.location.href='Home.php';
                        </script>");
						die;
					}
				}
				else
		           {
			          echo ("<script>
                      alert('Wrong email or password!');
                      window.location.href='index.php';
                      </script>");
		              die;
		}
			}
		}
	  die;
	}

?>