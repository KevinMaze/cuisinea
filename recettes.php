<?php
  require_once('templates/header.php');

  require_once('lib/recipe.php');
?>



  <div class="row flex-lg-row-reverse align-items-center g-5 py-5 px-5">
      <h1>Liste des recettes</h1>
  </div>

  <div class="row px-5">

    <?php foreach ($recipes as $key => $recipe) {
      
      include('templates/recipe-partial.php')
      ?>
      

    <?php } ?>
  </div>
  
<?php require_once('templates/footer.php'); ?>