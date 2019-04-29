<?php 
    include("includes/header.php");
    $serviceImages = array (
        "img/services-header-1.jpg",
        "img/services-header-2.jpg",
        "img/services-header-3.jpg",
        "img/services-header-4.jpg",
        "img/services-header-5.jpg"
    );
    shuffle($serviceImages)
?>

            <main>
            <div class="services-header-img">
                <img src="<?php echo $serviceImages[0]?>" alt="Our services header image">
            </div>
            <main>
                <h1>Services</h1>
                <p>Our services provide the best digital value in nulla suscipit interdum diam at maximus. Proin vitae
                    tellus
                    rutrum, accumsan nunc sit amet, iaculis tortor. Mauris consectetur feugiat justo quis aliquet.
                    Curabitur cursus
                    et justo eu consequat. Fusce finibus sem neque, sed faucibus nibh pellentesque eleifend. Mauris
                    euismod
                    facilisis iaculis.</p>

                <hr>

                <section class="service">

                    <!-- Start of card 1 -->
                    <div class="service__card">
                        <h2>Digital Design</h2>
                        <p>Nulla suscipit interdum diam at maximus. Proin vitae tellus rutrum, accumsan nunc sit amet,
                            iaculis tortor.
                            Mauris consectetur feugiat justo quis aliquet. Curabitur cursus et justo eu consequat. Fusce
                            finibus sem
                            neque, sed faucibus nibh pellentesque eleifend. Mauris euismod facilisis iaculis.</p>
                        <a href="#">Learn More</a>
                    </div>
                    <!-- End of card 1 -->

                    <!-- Start of card 2 -->
                    <div class="service__card">
                        <h2>UX / UI</h2>
                        <p>Nulla suscipit interdum diam at maximus. Proin vitae tellus rutrum, accumsan nunc sit amet,
                            iaculis tortor.
                            Mauris consectetur feugiat justo quis aliquet. Curabitur cursus et justo eu consequat. Fusce
                            finibus sem
                            neque, sed faucibus nibh pellentesque eleifend. Mauris euismod facilisis iaculis.</p>
                        <a href="#">Learn More</a>
                    </div>
                    <!-- End of card 2 -->

                    <!-- Start of card 3 -->
                    <div class="service__card">
                        <h2>Digital Marketing</h2>
                        <p>Nulla suscipit interdum diam at maximus. Proin vitae tellus rutrum, accumsan nunc sit amet,
                            iaculis tortor.
                            Mauris consectetur feugiat justo quis aliquet. Curabitur cursus et justo eu consequat. Fusce
                            finibus sem
                            neque, sed faucibus nibh pellentesque eleifend. Mauris euismod facilisis iaculis.</p>
                        <a href="#">Learn More</a>
                    </div>
                    <!-- End of card 3 -->

                    <!-- Start of card 4 -->
                    <div class="service__card">
                        <h2>Web Development</h2>
                        <p>Nulla suscipit interdum diam at maximus. Proin vitae tellus rutrum, accumsan nunc sit amet,
                            iaculis tortor.
                            Mauris consectetur feugiat justo quis aliquet. Curabitur cursus et justo eu consequat. Fusce
                            finibus sem
                            neque, sed faucibus nibh pellentesque eleifend. Mauris euismod facilisis iaculis.</p>
                        <a href="#">Learn More</a>
                    </div>
                    <!-- End of card 4 -->

                    <!-- Start of card 5 -->
                    <div class="service__card">
                        <h2>iOS Development</h2>
                        <p>Nulla suscipit interdum diam at maximus. Proin vitae tellus rutrum, accumsan nunc sit amet,
                            iaculis tortor.
                            Mauris consectetur feugiat justo quis aliquet. Curabitur cursus et justo eu consequat. Fusce
                            finibus sem
                            neque, sed faucibus nibh pellentesque eleifend. Mauris euismod facilisis iaculis.</p>
                        <a href="#">Learn More</a>
                    </div>
                    <!-- End of card 5 -->

                    <!-- Start of card 6 -->
                    <div class="service__card">
                        <h2>Android Development</h2>
                        <p>Nulla suscipit interdum diam at maximus. Proin vitae tellus rutrum, accumsan nunc sit amet,
                            iaculis tortor.
                            Mauris consectetur feugiat justo quis aliquet. Curabitur cursus et justo eu consequat. Fusce
                            finibus sem
                            neque, sed faucibus nibh pellentesque eleifend. Mauris euismod facilisis iaculis.</p>
                        <a href="#">Learn More</a>
                    </div>
                    <!-- End of card 6 -->

                </section>

                <section class="facts">
                    <div class="facts__info">
                        <h2>Some Facts About Our Services</h2>
                        <p>Nulla suscipit interdum diam at maximus. Proin vitae tellus rutrum, accumsan nunc sit amet,
                            iaculis tortor.
                            Mauris consectetur feugiat justo quis aliquet. Curabitur cursus et justo eu consequat. Fusce
                            finibus sem
                            neque, sed faucibus nibh pellentesque eleifend. Mauris euismod facilisis iaculis.</p>
                        <ul>
                            <li>Aesome thing</li>
                            <li>Amazing thing</li>
                            <li>Cool thing</li>
                            <li>Great thing</li>
                        </ul>
                    </div>
                    <div class="facts__info">
                        <img class="services-info-img" src="img/services-info.png"
                            alt="one of our employees hard at work">
                    </div>
                </section>
            </main>
<?php 
    include("includes/footer.php");
?>