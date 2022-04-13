<?php include 'includes/header.php'?>
<body>
    <!-- Main Section-->
    <section class="main">
        <!-- section-banner-strt -->
          <div class="top-banner"></div>
        <!-- section-banner-end -->
        <div class="container-grid">
            <div class="col-8">
                <!-- home-intro -->
                <div class="home-intro">
                    <h4 class="heading-grey">WHO WE ARE</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nesciunt iste unde porro nobis magnam facilis alias, itaque amet iusto ducimus blanditiis qui >Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nesciunt iste unde porro nobis magnam facilis alias, itaque amet iusto ducimus blanditiis qui>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nesciunt iste unde porro nobis magnam facilis alias, itaque amet iusto ducimus blanditiis qui>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nesciunt iste unde porro nobis magnam facilis alias, itaque amet iusto ducimus blanditiis quiexplicabo quia!</p>
                    <a href="#">READ MORE</a>
                </div>
                <!-- home-intro -->
                <!-- our-services -->
                <div class="our-services">
                    <h4 class="heading-grey">OUR SERVICES</h4>
                    <div class="service-imgs">
                        <div class="service">
                            <img class="img-1" src="img/our-services/FITNESS-B.jpg" alt="">
                            <img class="img-2" src="img/our-services/FITNESS.jpg" alt="">
                        </div>
                        <div class="service">
                            <img class="img-1" src="img/our-services/WEIGHTS-B.jpg" alt="">
                            <img class="img-2" src="img/our-services/WEIGHTS.jpg" alt="">
                        </div>
                        <div class="service">
                            <img class="img-1" src="img/our-services/YOGA-B.jpg" alt="">
                            <img class="img-2" src="img/our-services/YOGA.jpg" alt="">
                        </div>
                        <div class="service">
                            <img class="img-1" src="img/our-services/PILATES-B.jpg" alt="">
                            <img class="img-2" src="img/our-services/PILATES.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- our-services -->
                <!-- our-trainers -->
                <div class="trainers">
                    <h4 class="heading-grey">OUR TRAINERS</h4>
                    <div class="t-banner"></div>
                </div>
                <!-- our-trainers -->
                <!-- our-plans -->
                
                <div class="our-plans">
                    <h4 class="heading-grey">OUR PLANS</h4>
                    <div class="plans">
                        <div class="plan-img"></div>
                        <div class="plan-content">
                            <h4>SUMMER SPECIAL DISCOUNT</h4>
                            <h3>GET <span>25% OFF</span> WITH OUR NEW PLAN </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut odio praesentium, fuga assumenda necessitatibus quidem temporibus dolore ab? Suscipit illum repellendus eligendi veritatis nam porro.  </p> 
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
                <!-- our-plans -->
            </div>
            <!-- right-sidebar start -->
            <?php include 'includes/right-sidebar.php'?>
            <!-- right-sidebar end -->
        </div>
    </section>
    <!-- Main Section-->
    <?php include 'includes/footer.php'?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.service img:last-child').hide();
            $('.service').mouseover(function(){
                $(this).children('img.img-1').css('display','none');
                $(this).children('img.img-2').addClass('active');
            });
            $('.service').mouseleave(function(){
                $(this).children('img.img-1').css('display','block');
                $(this).children('img.img-2').removeClass('active');
            });
        });
    </script>
</body>
</html>