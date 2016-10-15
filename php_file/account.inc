<?php
	if(isset($_POST['submitAccountKnow']))
		{
			if (isset($_POST['mailClient']))
				{
					$mail=$_POST['mailClient'];
					$_SESSION['mailClient']=$_POST['mailClient'];
					$password=$_POST['passwordClient'];

					check_existing_mail($mail);
					check_account($mail, $password);
          echo"<p>POUET</p>";
				}
			else
				{
					$message='Veuillez saisir votre adresse mail et votre mot de passe';
				}
		}
	elseif (isset($_POST['submitAccountUnknow']))
	{
    $_SESSION['mailClient']=$_POST['mailClientNew'];
    $mail=$_SESSION['mailClient'];
		check_existing_mail($mail);

		if ($_SESSION['mailExist']=='no')
			{
				account();
			}
		else
			{
				include ("php_file/my_account.inc");
			}
	}
?>
