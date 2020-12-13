
<?php include "ParseIndex.php"; ?>
<!DOCTYPE html>
<html>
<body>

<!-- modal --> 
 <?php if(isset($_GET['error']) && $_GET['error'] === "false") : ?>
		   <div class="modal" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				</div>
			</div>
		   </div>
		 <?php endif; ?>
		<!-- End modal -->

<?php if (isset($_GET['error']) && $_GET['error'] === "true"): ?>		
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Oups ! </strong> erreur d'insertion !
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 <span aria-hidden="true">&times;</span>
	</button>
</div>


<?php endif ?>

	<div class="container content">
		<div class="white-divider"></div>
		<div class="heading">
			<h2 class='white'>contactez-moi</h2>
		</div>
		
		<!-- <div class="row"> -->
			<!-- <div class="col-lg-10 col-lg-offset-1"> -->
				<form id="contact-form" class="form-group" method="post" action="" role="form">
					<div class="row">
						<div class='addresse'>
							<div class='col-md-4 localisation'>
								<a href=""><span class='glyphicon glyphicon-map-marker'></span> Localisation</a>
								<p>Port Bouet, Abidjan, Cote d'Ivoire</p>
							</div>
							<div class='col-md-4 tel'>
								<a href=""><span class='glyphicon glyphicon-earphone'></span> Téléphone</a>
								<p>+225 48354780 </p>
							</div>
							<div class='col-md-4 mail'>
								<a href=""><span class='glyphicon glyphicon-envelope'></span> Localisation</a>
								<p>oury.diallo@uvci.edu.ci</p>
							</div>
						</div>

						<div class="col-md-6">
							<input type="text"id="name"name="lastname"class="form-control"placeholder="Votre nom" value=""> 
							<p class="comments"><?php if(isset($lastnameError)) echo $lastnameError; ?></p>
						</div>

						<div class="col-md-6">
							<input type="text"id="email"name="email"class="form-control"placeholder="Votre mail" value="">
							<p class="comments"><?php if(isset($emailError)) echo $emailError; ?></p>
						</div>

						<div class="col-md-12">
							<input type="tel"id="phone"name="objet"class="form-control"placeholder="Objet"value="">
							<p class="comments"><?php if(isset($objetError)) echo $objetError; ?></p>
						</div>

						<div class="col-md-12">
							<textarea id="message" class='form-control' name="message" placeholder="Votre message" row="4" style="margin: 0px;  height: 156px;border: 1px solid #ccc;" ></textarea>
							<p class="comments"><?php if(isset($messageError)) echo $messageError; ?></p>
						</div>

						<div class="col-md-4">
							<input type="submit" name="btnSend" class="button2" value="envoyez">
						</div>

					</div>

				</form>
	</div>

</body>
</html>
