<?php 
  require_once('templates/header.php');

  require_once('lib/recipe.php');
?>



  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo cuisinea" width="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea - Recettes de cuisine</h1>

        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eius minima hic voluptates illum ullam ducimus a corporis commodi deserunt eligendi culpa nihil dolorem eaque sunt voluptatum nisi odit voluptatibus nemo consectetur aut eum optio, quod praesentium. Id, placeat obcaecati!</p>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start">

          <a href="recettes.php" class="btn btn-primary">Voir nos recettes</a>

        </div>
      </div>
    </div>
  </div>

  <div class="row px-5">

    <?php foreach ($recipes as $key => $recipe) {
      
      include('templates/recipe-partial.php')
      ?>
      

    <?php } ?>
  </div>
  
<?php require_once('templates/footer.php'); ?>


<!-- reste 40 min episode 5 -->