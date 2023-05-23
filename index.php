<?php 
  define('_RECIPES_IMG_PATH_', 'uploads/recipes/');

  $recipes = [
    ['title' => 'Salade', 'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '3-salade.jpg'],
    
    ['title' => 'Gratin Dauphinois', 'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '2-gratin-dauphinois.jpg'],

    ['title' => 'Mousse au chocolat', 'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '1-chocolate-au-mousse.jpg'],
  ];
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

          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>

        </div>
      </div>
    </div>
  </div>

  <div class="row px-5">

    <?php foreach ($recipes as $key => $recipe) {?>
      
      <div class="col-md-4">
        <div class="card">
          <img src=<?=_RECIPES_IMG_PATH_.$recipe['image'];?> class="card-img-top" alt="Salade">
            <div class="card-body">
              <h5 class="card-title"><?= $recipe['title'];?></h5>
              <p class="card-text"><?= $recipe['description'];?></p>
              <a href="#" class="btn btn-primary">Aller à la recette</a>
            </div>
        </div>
      </div>

    <?php } ?>

  </div>
  


  