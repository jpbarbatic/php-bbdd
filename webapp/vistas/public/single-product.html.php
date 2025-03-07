<!-- ***** Product Area Starts ***** -->
<section style="margin-top: 150px;" class="section" id="product">
    <div class="container">
        <div class="row">
            <?php if (isset($producto)): ?>
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="imagenes/productos/<?php echo $producto['id'] ?>.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4><?php echo $producto['nombre'] ?></h4>
                        <span class="price"><?php echo $producto['precio'] ?> &euro;</span>
                        <div>
                            <ul class="">
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                        </div>
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <h4>Total: $210.00</h4>
                            <div class="main-border-button"><a href="#">Add To Cart</a></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- ***** Product Area Ends ***** -->