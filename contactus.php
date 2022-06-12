<?php include 'includes/header.php'?>
<body>
    <!-- Main Section-->
    <section class="main contact-page">
        <!-- section-banner-strt -->
          <div class="top-banner contactus"></div>
        <!-- section-banner-end -->
        <div class="container-grid">
            <div class="col-8">
              <div class="home-intro contact-us my-20">
                    <h4 class="heading-grey">OUR LOCATION</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7217.786329406716!2d55.252517400000016!3d25.240523099999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f437b2751623d%3A0x45319e0afeb5780e!2sPort%20de%20La%20Mer%20by%20Meraas!5e0!3m2!1sen!2sae!4v1648415391693!5m2!1sen!2sae" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-us-form">
                <h4 class="heading-grey">REGISTER NOW</h4>
                <form action="" class="registration-form">
                    <!-- Feild1 -->
                    <input type="text" placeholder="YOUR NAME">
                    <!-- Feild1 -->
                    <!-- Feild2 -->
                    <input type="email" placeholder="EMAIL-ADDRESS">
                    <!-- Feild2 -->
                    <!-- Feild3 -->
                    <input type="tel" placeholder="PHONE-NUMBER">
                    <!-- Feild3 -->
                    <select name="" id="">
                        <option value="" selected hidden>PACKAGE</option>
                        <option value="">Standard</option>
                        <option value="">Gold</option>
                        <option value="">Elite</option>
                    </select>
                    <textarea name="" placeholder="TELL US WHAT YOU ARE LOOKING FOR" id="" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn-register">SUBMIT</button>
                </form>
                </div>
                <!-- Feedback-Icons -->
                <?php include 'feedback-icons.php'?>
            </div>
            <!-- right-sidebar start -->
            <?php include 'includes/right-sidebar.php'?>
            <!-- right-sidebar end -->
        </div>
    </section>
    <!-- Main Section-->
    <?php include 'includes/footer.php'?>
</body>
</html>