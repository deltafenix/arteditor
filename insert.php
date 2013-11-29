<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ArtEditor - Insert</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php include 'content/header.php';?>	
		<?php
			if (!isset($_SESSION['nome']) || (isset($_SESSION['level']) && $_SESSION['level'] != '1')) :
			?>
			<br /><br /><p></p>
			<fieldset>
	 		<?php 
		 		echo 'Sorry, no access allowed to this page';
			?>
			</fieldset>
			<?php 
			else : 
		?>		
		<div id="content">
			<div id="mainContent">
				<section>
					<article class="articolo">
						<header>
							<fieldset>
								<h3></h3><h3></h3><h3></h3>
								<h3>Insert Article</h3>
								<hr>
								<p>This is the about page the possibility to add an article in the blog.</p>
								<p>In this page you can insert the essential datas to create a new post.</p>	 
								<p></p>
							</fieldset>
						</header>
						<header>
							<form action="content/insertArticolo.php" method="post">
								<fieldset>
									<legend><i>Inserimento post</i></legend>
										
										<ul>
											<li><label for="Titolo">Titolo</label><br />
											<input id="titolo" name="titolo" type="text" /></li>
											<li><label for="Contenuto">Contenuto</label><br />
											<textarea id="contenuto" name="contenuto" rows="10" cols="77">
											</textarea></li>
										</ul>
													
										<input type="submit" name="save" value="Save" />
								</fieldset>
							</form>
						</header>
					</article>
				</section>	
			</div>
			<aside>
				<?php include "content/login.php"; ?>
		        <fieldset id="inputs">
					<header>
						<h4>Post Vari</h4>
					</header>
					<div id="postSide">
						<?php include 'content/postSide.php';?>
					</div>
				</fieldset>
			</aside>
		</div>
	<?php endif; ?>
</div><!-- end container -->
<br />
	<?php include 'content/footer.php';?>
</body>
</html>