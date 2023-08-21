<?php include '/xampp/htdocs/beautysalon/assests/components/header.php'; ?>
<?php include '/xampp/htdocs/beautysalon/assests/components/navbar.php'; ?>

    <section class="col-lg-10 mx-auto my-0 p-0">
        <div class="Introduction intro-img img-fluid p-4">
            <div class="intro-text mx-auto text-center mt-5 p-4">
                <h3 class="mt-5">We believe in You, Now believe Us </h3>
                <h3 class="mt-5">Naturally, you! </h3>
                <h2 class=" mt-5">What our Magicians can do for you </h2>
            </div>
        </div>
        <div class="d-lg-flex my-4">
            <div class="col col-img rounded pl-lg-0">
                <img src="/assests/images/haircare_lady.jpg" alt="" class="img-fluid">
            </div>
            <div class="col col-bg px-xs-2 px-sm-2 text-center">
                <h4 class="col-heading">Hair Care</h4>
                <p class="col-para">Hair Styling And Cuts<br> From Simple Look To<br>Contour Look </p>

                <a href="#" class="learn-more">learn more</a>
            </div>
        </div>

        <div class="col col-img rounded p-0 text-center seating">
                <img src="/assests/images/salonseating.jpg" alt="" class="p-0 img-fluid">
                <h3>Seating Place</h3>
                <p>We give you the best environment <br>soothing, mind fulfilling , clean and best services.</p>
            </div>
            <div class="d-lg-flex my-4">

                <div class="col col-bg px-xs-2 px-sm-2 text-center">
                    <h4 class="col-heading">Skin Care</h4>
                    <p class="col-para">Hair Styling And Cuts<br> From Simple Look To<br>Contour Look </p>
                    <a href="#" class="learn-more">learn more</a>

                </div>
                <div class="col col-img rounded">
                    <img src="/assests/images/skincare.jpg" alt="" class="p-0 img-fluid">
                </div>
            </div>
    </section>

    <?php if(!empty($success)){ ?>
        <script>alert('<?php echo $success ?>')</script> ;
   
        <?php } ?>
        <script>alert("<?php echo $success ; ?>")</script> 
<?php include '/xampp/htdocs/beautysalon/assests/components/footer.php';?>
 