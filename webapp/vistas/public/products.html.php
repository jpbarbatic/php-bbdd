    <!-- ***** Products Area Starts ***** -->
    <section style="margin-top: 50px;" class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Nuestro catálogo</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php include "paginacion.html.php" ?>
                </div>
                <div class="col-lg-12" style="text-align: center;">
                    <?php echo "Total productos: ".$total?>
                </div>
				<?php foreach($productos as $producto): ?>
                <div class="col-lg-4">
                    <div class="item">
                        <div style="text-align: center;" class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img style="height: 300px; width: auto;" src="imagenes/productos/<?php echo $producto['id'] ?>.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4><a style="color: black;" href="single-product.php?id=<?php echo $producto['id'] ?>"><?php echo $producto['nombre'] ?></a></h4>
                            <span><?php echo $producto['precio'] ?> &euro;</span>
                            <div>
                            <ul class="">
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                                <li style="float: left;"><i class="fa fa-star"></i></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<?php endforeach; ?>
                <div class="col-lg-12">
                    <?php include "paginacion.html.php"?>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
