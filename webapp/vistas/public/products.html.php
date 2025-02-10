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
                            <h4><a href="single-product.php?id=<?php echo $producto['id'] ?>"><?php echo $producto['nombre'] ?></a></h4>
                            <span><?php echo $producto['precio'] ?> &euro;</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
				<?php endforeach; ?>
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
