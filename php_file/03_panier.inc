<?php if (isset($_SESSION['count_basket']))	
		{
			//$count_basket=$_SESSION['count_basket'];
			$total_basket=$_SESSION['total_basket'];
			echo "
									<p class='textePanier'> Mon Panier</p>
								</div>
			
								
								<div id='totalPanier' class='textePanier'>
									<p class='textePanier'>$total_basket €</p>
								</div>
							</div>
							
						</div>
					</div>			
			";
		}
	else
		{
			//To look again because a problem for the first openning with a basket empty. It doesn't show the 0
			echo"
									<p></p>
								</div>
											
								<div id='totalPanier' class='textePanier'>
									<p class='textePanier'> 0 €</p>
								</div>
							</div>
							
						</div>
					</div>
			";
		}