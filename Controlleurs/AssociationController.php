<?php

/**
 * 
 */

require_once "./Models/Association.php";

class AssociationController
{
	public function creationAssoc()
	{
		$association = new Association();

		$liste_des_conducteurs = $association->findAll('conducteur');
		$liste_des_vehicules = $association->findAll('vehicule');

		require_once './Vues/Association/formulaire_creation_association.php';

		if (isset($_POST['submit'])) {

			$nouveau_conducteur = $association->setIdConducteur($_POST['id_conducteur']);

			$nouveau_vehicule = $association->setIdVehicule($_POST['id_vehicule']);

			$association->ajout_association($nouveau_conducteur, $nouveau_vehicule);
		}
	}

	public function listAssoc()
	{
		$association = new Association();

		$afficher_association = $association->show_association();

		require_once './Vues/Association/liste.php';
	}
	public function voirAssociationAModifier($id_du_association_a_modifier)
	{
		$association = new Association();
		$associationById = $association->findById($id_du_association_a_modifier, 'association');
		require_once "./Vues/association/formulaire_modification.php";

		if(isset($_POST['submit'])){
			foreach ($associationById as $value) {
				
				$id_conducteur = $value->setIdConducteur($_POST['conducteur']);
				$id_vehicule = $value->setIdVehicule($_POST['vehicule']);
				

				$value->updateAssoc($id_du_association_a_modifier, $id_conducteur, $id_vehicule);
			}
		}
	}
	public function delete($id)
	{
		$association = new Association();
		return $association->deleteById($id,'association');  
	}
	
}
?>