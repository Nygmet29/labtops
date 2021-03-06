<?php
  session_start();
  $conn = new mysqli('localhost','root','root','wishlist');

  if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_quantity'          =>     $_POST["quantity"],
                     'item_price'          =>     $_POST["hidden_price"]

                );
                $_SESSION["shopping_cart"][$count] = $item_array;

                $sqlInsert = "INSERT INTO wishlist('w_id', 'name', 'price')
                VALUES('item_id','item_name', 'item_price')";

                $conn->commit();
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="allprod.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>window.location="allprod.php"</script>';
                }
           }
      }
 }
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>All products | Laptops advertisement webpage</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       <link rel="stylesheet" type="text/css" href="style.css">
			 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
       <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <style type="text/css">

  body{
   background-image: linear-gradient(#000000, #06091e);
   font-family: Verdana, sans-serif;

  }
  .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }

    nav ul li a{
      color: white;
    }
    div div div a h5{
      color: white;
    }

  </style>

	<div class="header">
		<div class="container">
			<div class = "navbar">
				<div class="logo">
					<img src="assets/logo1.png">
				</div>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="">Contacts</a></li>
            <li><p href="" type="button" data-toggle="modal" data-target="#cart-modal" style="color: white;">Cart</p></li>
					</ul>
				</nav>
					<img src="assets/menu.png" class="menu-icon" style="width: 30px; height: 30px;" onclick="menutoggle">
			</div>
		</div>
	</div>

<h2 class="title2">All Products</h2>
<?php
  $sqlSelect = "SELECT * FROM products ORDER by  id ASC";
  $result = mysqli_query($conn, $sqlSelect);
  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_array($result))
    {
?>
  <div class="categories1">
    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <form method="post" action="allprod.php?action=add&id=<?php echo $row["id"];?>">
          <img href="prodPage/<?php echo $row["path"];?>" src="assets/<?php echo $row["image"];?>" style="width: 230px; height: 230px;">
          <h5><?php echo $row["name"];?></h5>
          <input type="text" name="quantity" value="1">
          <p>$<?php echo $row["price"];?></p>
          <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
          <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
          <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success add_to_cart" value="Add to Cart">
          </a>
        </form>
        </div>
      </div>
    </div>
  </div>
<?php
    }
  }
?>
  <div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Shopping cart</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <table class="table">
                      <thead>
                      <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                        if(!empty($_SESSION["shopping_cart"])) {
                          $total = 0;
                          foreach($_SESSION["shopping_cart"] as $keys => $values) {
                      ?>
                      <tr>
                          <td><a href="product.html"><?php echo $values["item_name"]; ?></a></td>
                          <td><?php echo $values["item_price"];?></td>
                          <td><?php echo $values["item_quantity"]; ?></td>
                      </tr>
                      <?php
                          $total = $total + ($values["item_quantity"] * $values["item_price"]);
                          }
                        }
                      ?>
                      <tr>
                          <td colspan="4" align="right">Total price: <br> $<?php echo $total; ?></td>
                      </tr>
                      </tbody>

                  </table>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Order</button>
              </div>
          </div>
      </div>
  </div>

  <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
