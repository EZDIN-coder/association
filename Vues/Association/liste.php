<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Conducteur</th>
      <th scope="col">Véhicule</th>
      <th scope="col">Modification</th>
      <th scope="col">Suppression</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($afficher_association as $association) {
      	
        echo "<tr>";
        echo "<td>".$association->getIdAssociation()."</td>";
        echo "<td>".$association->prenom." ".$association->nom." </br>".$association->getIdConducteur()."</td>";
        echo "<td>".$association->marque." ".$association->modele." </br>".$association->immatriculation."</td>";
        echo "<td><a href='?action=modificationAssociation&associationId=".$association->getIdAssociation()."'><img src='./Ressources/img/editVehi.png' width='30'></a>
        </td>";
        ?>
        <td><img src='./Ressources/img/deleteVehi.png' width='20' data-toggle="modal" data-target="#vtc-<?php echo $association->getIdAssociation(); ?>"></td>


        <!-- Modal -->
        <div class="modal fade" id="vtc-<?php echo $association->getIdAssociation(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">VTC - AFPA </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Voulez vous vraiment supprimer: <?php echo $association->getIdConducteur()." ".$association->getIdVehicule(); ?> ? 
                <small>Tu es sûr ? </small>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                <a href="">
                  <button type="button" class="btn btn-danger">Oui</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php
        echo "</tr>";
      }
    ?>
  </tbody>
</table>


