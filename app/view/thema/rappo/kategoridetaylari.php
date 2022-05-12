    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                                <?php echo $menu["ADI"];?>
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Elektrik üretim tesisleri motorlarının tüm yedek parçasını sitemizden temin edebilirsiniz.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->
<?php //var_dump($kategoridetaylari); ?>
            <div class="row justify-content-center">
                <?php foreach ($kategoridetaylari as $kategoridetay ):?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="assets/images/<?php echo $menu["link"]."/".$kategoridetay["resimlink"];?>" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h3><?php echo $kategoridetay["baslik"]; ?></h3>
                                <a href="#">
                                    <h3 class="card-title"><?php echo $kategoridetay["altbaslik"]; ?></h3>
                                </a>
                                <p><?php echo $kategoridetay["detay"]; ?></p>
                                <a href="mailto:info@agsteknik.com?subject=No <?php echo $kategoridetay["id"]; ?> Referansli urun teklif talebi&body=No <?php echo $kategoridetay["id"]; ?> referansli urun icin teklif talebi" class="read-more">Teklif Al - <?php echo $kategoridetay["id"]; ?></a>
                            </div>
                        </div>
                    </div>
                </div>  
                <?php endforeach;?>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="assets/images/elektrik-santralleri/motor-yedek-parca/agsteknik-turbosarj-02.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h3>Turboşarj</h3>
                                <a href="#">
                                    <h3 class="card-title">Brand your site value with marketing strategies</h3>
                                </a>

                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                 <a href="#" class="read-more">Teklif Al</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 col-md-8">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="assets/images/elektrik-santralleri/motor-yedek-parca/agsteknik-turbosarj-01.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                    <h3>Turboşarj</h3>
                                <a href="#">
                                    <h3 class="card-title">Website Optimization is very essential for site speed</h3>
                                </a>
                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                 <a href="#" class="read-more">Teklif Al</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>