<a href="index.php" class="mx-5">Retour à la liste des volontaires</a>

<form method="post" action="insertUser.php" class="mt-5">
<div class="form-group">
    <label for="name">Nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter le nom">
  </div>
  <div class="form-group">
    <label for="firstname">Prenom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter le prenom">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Enter l'age">
  </div>
  <div class="form-group">
    <label for="comment">Commentaire</label>
    <input type="text" class="form-control" name="comment" id="comment" placeholder="Commentaire">
  </div>
  <div class="form-group">
    <label for="disponibility">Disponibilité</label>
    <select class="form-control" name="disponibility" id="disponibility" value="<?php echo (isset($volonteer)?$volonteer["disponibility"]:""); ?>">
        <option value="1" selected>Disponibile</option>
        <option value="0" selected>Indisponibile</option>
    </select>
  </div>
  <div class="form-group">
    <label for="street">Rue</label>
    <input type="text" class="form-control" name="street" id="street" placeholder="Enter le Rue">
  </div>
  <div class="form-group">
    <label for="city">Ville</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Enter le Ville">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>