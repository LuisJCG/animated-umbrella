<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>AU - Shopping Cart</title>
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
            <a class="navbar-brand" href="<?= base_url()?>/public/home">Animated Umbrella</a>
            <div style="float:right">
            <a href="<?= base_url() ?>/public/cart#" class="icons-btn">
                    <i class="bi bi-cart4 text-light" style="font-size:1rem;"> Cart <span class="number p-1" "></span></i>
                  </a>
            </div>
         </div>
      </nav>
      <!-- Header-->
      <header class="py-5">
         <div class="container px-lg-4">
            <div class="p-4 p-lg-2 rounded-3">
               <div class="m-3 m-lg-0">
                  <h1 class="display-5 fw-bold text">Shopping Cart</h1>
               </div>
            </div>
         </div>
      </header>
      <!-- Section-->

  
      <section class="py-1">
         <div class="container px-4 px-lg-5">

         
         
            <table class="table table-hover table-striped">
               <thead>
                  <tr>
                     <th scope="col">Nº</th>
                     <th scope="col">Product</th>
                     <th scope="col">Price</th>
                     <th scope="col">Quantity</th>
                     <th scope="col">   </th>
                     <th scope="col">Price</th>
                  </tr>
               </thead>
               <tbody>
               <?php if ($items) { ?>
                  <?php foreach ($items as $item) { ?>
                     <tr>
                        <th scope="row"><?php echo($item["index"]) + 1 ?></th>
                        <td> <img class="img-responsive" src="https://dummyimage.com/100x100/<?php echo(rand(0,9)) ?><?php echo(rand(0,9)) ?><?php echo(rand(0,9)) ?>/fff&text=<?php echo ($item["name"]) ?>" alt=""></td>
                        <td><?php echo($item["name"]) ?></td>
                        <td><?php echo($item["quantity"]) ?></td>
                        <td> <a href="<?= base_url().'/public/cart/removeCart?id='.$item["cart_id"]?>" class="icons-btn">
                           <i class="bi bi-trash text-dark" style="font-size:1.2rem;"><span class="number p-1" "></span></i>
                           </a>
                        </td>
                        <td>$ <?php echo($item["item_price"]) ?></td>
                        </tr>
                     <?php } ?>
                  <?php } else {  ?>
                     <tr>
                     <th scope="row">1</th>
                     <td colspan="5" align="center"><h4>Empty Cart :( </h4></td>
                     </tr>
                     <?php }  ?>
               </tr>
               </tbody>
            </table>
            <div class="py-5 d-flex flex-column align-items-end mr-5">
               <h3>Resume</h3>
               <table class="table-sm">
                  <tr>
                     <td>Subtotal</td>
                     <td>$ <?php echo($total_price) ?></td>
                  </tr>
                  <tr>
                     <td>% Off</td>
                     <td>$ 0</td>
                  </tr>
                  <tr>
                     <th>Total</th>
                     <td>$ <?php echo($total_price) ?></td>
                  </tr>
               </table>
               <button type="button" class="btn btn-dark mt-2" style="text-align: right;flex:1;">
               <i class="bi bi-bag-check"></i>
               <a href="<?= base_url().'/public/confirm?id='.$item["cart_id"]?>" class="icons-btn">
               Buy Now!
               </a>
               </button>
            </div>
         </div>
      </section>
      <!-- Footer-->
      <footer class="py-5 bg-dark">
         <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Animated Umbrella GmH 2021</p>
         </div>
      </footer>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
   </body>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>