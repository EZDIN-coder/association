<?php
	foreach ($associationById as $association) {
		?>
			<div class="container">
				<form method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Conducteur</label>
				    <input type="text" class="form-control" name="conducteur" value="<?php echo $association->getIdConducteur(); ?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Vehicule</label>
				    <input type="text" class="form-control" name="vehicule" value="<?php echo $association->getIdVehicule(); ?>">
				  </div>
				  <button type="submit" class="btn btn-warning" name="submit">Modifier<?php echo $association->getIdAssociation(); ?></button>
				</form>
			</div>
		<?php
	}
?>