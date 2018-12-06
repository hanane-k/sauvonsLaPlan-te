<?php
require "template/header.php";
?>

<h2>Liste des bénévoles : </h2>
<a href="insertUser.php" class="btn btn-primary mt-5 mb-5">Ajouter un bénévole</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">firstname</th>
      <th scope="col">age</th>
      <th scope="col">comment</th>
      <th scope="col">disponibility</th>
      <th scope="col">street</th>
      <th scope="col">city</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach ($volonteers as $key => $volonteer) {
    ?>

    <tr>
      <th scope="row"><?php echo $volonteer["ID"]; ?></th>
      <td><?php echo $volonteer["name"]; ?></td>
      <td><?php echo $volonteer["firstname"]; ?></td>
      <td><?php echo $volonteer["age"]; ?></td>
      <td><?php echo $volonteer["comment"]; ?></td>
      <td><?php echo $volonteer["disponibility"]; ?></td>
      <td><?php echo $volonteer["street"]; ?></td>
      <td><?php echo $volonteer["city"]; ?></td>
      <td>
      <a href="deleteUser.php?id=<?php echo $volonteer['ID']; ?>" class="btn btn-primary">Supprimer</a>
      </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>

<?php
require "template/footer.php";
?>