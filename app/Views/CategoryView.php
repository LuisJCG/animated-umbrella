<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1,
         shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>AU - Category</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Bootstrap icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style>
         .card-horizontal {
         display: flex;
         flex: 1 1 auto;
         }
      </style>
   </head>
   <body>
      <!-- Responsive navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container px-lg-5">
            <a class="navbar-brand" href="<?= base_url()?>/public/home">Animated Umbrella</a>
            <div style="float:right">
             <a href="<?= base_url() ?>/public/cart#" class="icons-btn">
             <i class="bi bi-cart4 text-light" style="font-size:1rem;"> Cart <span class="number p-1" "></span></i>
               </a>
            </div>
         </div>
      </nav>
      <!-- Header-->
      <header>
         <div class="container-fluid px-lg-4" style="background-color:black">
            <div class="p-4 p-lg-5 rounded-3 text-center">
               <div class="m-4 m-lg-2">
                  <h1 class="display-5 fw-bold text-light"><?php echo ($_GET["cat"]) ?> Category</h1>
                  <p class="fs-4 text-light">With over 15,000 five-star reviewers — and a ranking in the top 10 of our list of the best <?php echo ($_GET["cat"]) ?></p>
               </div>
            </div>
         </div>
      </header>
      <!-- Section-->
      <section class="mt-5">
         <div class="container px-4 px-lg-5">
               <!-- CARDS-->
               <?php foreach ($products as $product) { ?>
               <div class="row mt-4">
                  <div class="col-md-6">
                     <a href="#">
                     <img class="" src="https://dummyimage.com/500x300/<?php echo(rand(0,9)) ?><?php echo(rand(0,9)) ?><?php echo(rand(0,9)) ?>/fff&text=<?php echo ($product["name"]) ?>">
                     </a>
                  </div>
                  <div class="col-md-5">
                     <h2><?php echo ($product["name"]) ?></h2>
                     <h5><?php echo ($product["product_description"]) ?></h5>
                     <p><?php echo ($product["price"]) ?> $</p>
                     <a class="btn btn-dark" href="<?= base_url().'/public/product?id='.$product["id"]?>">See more<span class="glyphicon glyphicon-chevron-right"></span></a>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
      <!-- Footer-->
      <footer class="py-5 bg-dark mt-4">
         <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Animated
               Umbrella GmH 2021
            </p>
         </div>
      </footer>
</body>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>