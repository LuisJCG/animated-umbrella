<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>AU - Product</title>
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Bootstrap icons-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
   <!-- Responsive navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container px-lg-5">
         <a class="navbar-brand" href="<?= base_url() ?>/public/home">Animated Umbrella</a>
         <div style="float:right">
         <a href="<?= base_url() ?>/public/cart#" class="icons-btn">
                    <i class="bi bi-cart4 text-light" style="font-size:1rem;"> Cart <span class="number p-1" "></span></i>
                  </a>
            </div>
         </div>
      </nav>

        <!-- Header-->
        <header class=" py-5">
                     <div class="container px-lg-4">
                        <div class="p-4 p-lg-2 rounded-3">
                           <div class="m-3 m-lg-0">
                              <h1 class="display-5 fw-bold text">Product Detail</h1>
                           </div>
                        </div>
                     </div>
                     </header>

                     <!-- Section-->
                     <section class="py-1">
                        <div class="container px-4 px-lg-5">
                           <div class="row">
                              <div class="col-md-6 mb-4 mb-md-0">
                                 <div class="row product-gallery mx-1">
                                    <div class="col-12 mb-0">
                                       <figure class="view overlay rounded z-depth-1 main-img">
                                          <a href="" data-size="710x823">
                                             <img src="https://dummyimage.com/500x400/000/fff&text=<?php echo ($product["name"]) ?>" class="img-fluid z-depth-1">
                                          </a>
                                       </figure>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <h5><?php echo ($product["name"]) ?></h5>
                                 <p class="mb-2 text-muted text-uppercase small">New Season</p>
                                 <p><span class="mr-1"><strong>$<?php echo ($product["price"]) ?></strong></span></p>
                                 <p class="pt-1"><?php echo ($product["product_description"]) ?>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At hoc in eo M. Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Expectoque quid ad id, quod quaerebam, respondeas.
                                 </p>
                                 <button type="button" onclick="alert('Added to Cart!')" class="btn btn-dark btn-md mr-1 mt-2"> <a class="btn btn-dark" href="<?= base_url().'/public/product/addCart?id='.$product["id"]?>">Add to Cart</a></button>
                              </div>
                           </div>
                        </div>
         </div>
         </section>

         <!-- Header-->
         <header class="mt-5">
            <div class="container-fluid px-lg-4" style="background-color:black">
               <div class="p-4 p-lg-5 rounded-3 text-center">
                  <div class="m-4 m-lg-2">
                     <h1 class="display-5 fw-bold text-light">Welcome to Animated Umbrella Shop!</h1>
                     <p class="fs-4 text-light">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
                  </div>
               </div>
            </div>
         </header>
         <!-- Footer-->
         <footer class="py-5 bg-dark">
            <div class="container">
               <p class="m-0 text-center text-white">Copyright &copy; Animated Umbrella GmH 2021</p>
            </div>
            <br />
         </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>