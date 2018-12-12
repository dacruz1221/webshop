<?php
//include auth.php file on all secure pagez
include("auth.php");
header('Content-Type: text/html; charset=utf-8');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<!--INCLUSIONS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="StyleSheet.css" rel="stylesheet" type="text/css">
<!-- NAVBAR -->
<div class='navigation'>
  <div class='logo'>Kleinbichler/Mach - Webshop</div>
  
  <div class='account-container'>
  <i class="fa fa-user" aria-hidden="true"></i>
    <div class='einkaufsw-container'><?php if($logintrue==0){ echo 'nicht angemeldet';} else echo $_SESSION['username']; ?></div>
  </div>
  <div class='account-container'>
    <?php if($logintrue==1){ echo ' <a href="logout.php">logout</a>';} else { echo ' <a href="login.php">login</a>';
    }?>
  </div>
  <div class='wagen-container'>
  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <div class='einkaufsw-container'>Warenkorb</div>
  </div>
  
</div>

<!-- INFO BAR -->
<div class='info-wrapper'>
  <div class='shipping-container'>
   
    <div class='info-desc'>Jetzt im Sonderangebot</div>
  </div>
  <div class='inventar-container'>
    
    <div class='info-desc'>Largest online inventory</div>
  </div>
</div>

<!-- MAIN WRAPPER -->
<div class='main-wrapper'>
  <div class="menu">
    <div class='menu-item produkt1'>
      <div class='menu-item-title'>Produktetitel</div>
      <div class='menu-item-number'>13</div>
    </div>
    <div class='menu-item produkt2'>
      <div class='menu-item-title'>Produkttitel</div>
      <div class='menu-item-number'>88</div>
    </div>
    <div class='menu-item'>
      <div class='menu-item-title produkt3'>Produkttitel</div>
      <div class='menu-item-number'>54</div>
    </div>
    <div class='menu-item'>
      <div class='menu-item-title produkt4'>Produkttitel</div>
      <div class='menu-item-number'>99</div>
    </div>
  </div>

  <div class='products-container'>

    <div class='shop-card' data-cat='Amazon'>
      <div class="title">
       feinste Kartoffeln
      </div>
      <div class="desc">
       mmmm ... lecker
      </div>
      <div class="product">
         <img src="potato.jpg"/>
      </div>
      <div class='cta'>
        <div class="price">130€</div>
        <button class="button">jetzt kaufen!</button>
      </div>
    </div>
 </div>
</div>



