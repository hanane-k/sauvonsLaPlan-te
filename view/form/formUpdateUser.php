
<a href="index.php" class="mx-5">Retour à la liste des volontaires</a>
<form method="post" action="updateUser.php" class="mt-5">
  <input type="hidden" class="form-control" name="ID" id="id" value="<?php echo (isset($volonteer)?$volonteer["ID"]:""); ?>">
  <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo (isset($volonteer)?$volonteer["name"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="firstname">Prenom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo (isset($volonteer)?$volonteer["firstname"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" id="age" value="<?php echo (isset($volonteer)?$volonteer["age"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="comment">Commentaire</label>
    <input type="text" class="form-control" name="comment" id="comment" value="<?php echo (isset($volonteer)?$volonteer["comment"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="disponibility">Disponibilité</label>
    <select class="form-control" name="disponibility" id="disponibility" value="<?php echo (isset($volonteer)?$volonteer["disponibility"]:""); ?>">
        <option value="1" selected>Disponible</option>
        <option value="0">Indisponible</option>
    </select>
  </div>
  <div class="form-group">
    <label for="street">Rue</label>
    <input type="text" class="form-control" name="street" id="street" value="<?php echo (isset($volonteer)?$volonteer["street"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="city">Ville</label>
    <input type="text" class="form-control" name="city" id="city" value="<?php echo (isset($volonteer)?$volonteer["city"]:""); ?>">
  </div>
  <button type="submit" class="btn btn-primary">Sauvegarder</button>

</form>