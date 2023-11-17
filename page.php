<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <main class="main">
        <section class="section-main">
            <div class="principal d-flex flex-column justify-content-center">
                <div class="container container-principal">
                    <h1 class="text-light"><?php the_title(); ?></h1>
                    <p class="text-content"><?php the_content(); ?></p>
                    <?php
                    $campo_btn = get_field('btn_enviar');
                    $campo_placeHolder = get_field('placeholder');
                    if($campo_btn && $campo_placeHolder){
                    echo '<div class="input-group mb-3 w-30">
                    <input type="text" class="form-control rounded-start-pill ps-4" placeholder="' .$campo_placeHolder. '" aria-label="Recipients username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary rounded-pill ml-negativo text-light" type="button" id="button-addon2">'. $campo_btn . '</button>
                    </div>';
                    }
                    ?>
                </div>
            </div>
            </section>
            <!-- Sección secundaria -->
            <section class="secundaria container bg-white h-30 m-auto d-flex py-2 p-5">
               <div class="col-4 d-flex align-items-center">
                <img class="w-tuatara" src="https://i.ibb.co/BjLtKMw/ezgif-com-resize.gif" alt="tuatara">
                <h3 class="">ABOUT<br><span class="fw-light">TUATARA</span></h3>
               </div>
               <div class="col-8 d-flex align-items-center">
                <p class="text-dark">Tuataras, New Zealand Reptiles inspire us with its behavior to breathe what we call Mutualism, a way of living, managing and relating with our beloved clients. Its goal is to harvest long-term relations where transparency, trust, and communication ends in a win-win.</p>
               </div> 
            </section>
            <!-- Fin sección secundaria -->

            <!-- Sección Terciaria -->
            <section class="terciaria d-flex align-items-center">
                <div class="col-img-escritorio col-6 d-flex align-items-center justify-content-end h-100">
                    <img id="escritorio-tecnologia" src="https://i.ibb.co/PYPYYzz/ezgif-com-resize-2.gif" alt="escritorio y técnologia">
                </div>
                <div class="col-6 pe-extra">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    <b>Software & Tech </b>
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        At Tuatara we love technology and we are excited about the future. For this reason we focus on creating innovative solutions. Feel free to explore our projects and contact us if you have an idea you want to implement.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                    <b>Pure Design</b> 
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                    Design should evoke feelings, should play with our senses so we can reach a level where we can have thrilling and connected human experiences.
                    </div>
                    <div class="badge-container d-flex justify-content-evenly">
                    <span class="w-20 badge rounded-pill">Branding</span>
                    <span class="w-20 badge rounded-pill">Animation</span>
                    <span class="w-20 badge rounded-pill">Character</span>
                    <span class="w-20 badge rounded-pill">Printed</span>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <b>Marketing</b> 
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                    We combine our expertise in design and technology to create unique marketing experiences that connect with your clients and increase your sales.
                    </div>
                    </div>
                </div>
                </div>
              </div>
            </section>
            <!-- Fin sección Terciaria -->

            <!-- Sección Cuarta -->
            <section class="cuarta carrusel fluid d-flex">
                <div class="slider-left col-4 h-100 d-flex align-items-start">
                <div class="card fluid glassmorphismo">
                    <div class="card-body">
                        <h4 class="card-title">Our Portfolio</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">PURE DESING</h6>
                        <p class="card-text">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500</p>
                    </div>
                    </div>
                </div>
                <div class="slider-right col-8 h-100 d-flex flex-column justify-content-start">
                    <div id="carouselExampleCaptions" data-bs-ride="carousel"  class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="/wp-content/uploads/2023/11/Proyect-3-movil.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">Hack Americas</h5>
                                <p class="text-dark">texto de relleno de las imprentas y archivos de texto.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="/wp-content/uploads/2023/11/Proyect-4-movil.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">Helitours Malta</h5>
                                <p class="text-dark">texto de relleno de las imprentas y archivos de texto.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="/wp-content/uploads/2023/11/Proyect-5-movil.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">Bix</h5>
                                <p class="text-dark">texto de relleno de las imprentas y archivos de texto.</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Fin sección Cuarta -->

             <!-- Sección Quinta -->
            <section id="contact" class="quinta formulario fluid d-flex">
                    <div class="col-5">
                        <img class="img-descansando" src="/wp-content/uploads/2023/11/contacto-home.png" alt="sujeto descansando">
                    </div>
                    <div class="col-7">
                    <form class="formulario">
                        <fieldset>
                            <h2><b>CONTACT</b> <span class="fw-light">US</span></h2>
                            <h6>LET´S TALK</h6>
                            <div class="mb-3 mt-4">
                            <input type="text" class="form-control form-contact" placeholder="Name">
                            <input type="email" class="form-control form-contact" placeholder="Email">
                            <input type="tel" class="form-control form-contact" placeholder="Phone">
                            <input type="text" class="form-control form-contact" placeholder="What's on your mind?">
                            </div>
                            <div class="btn-container fluid d-flex justify-content-end mt-5"><button id="btn_submit" type="submit" class="btn btn-primary rounded-pill px-5 bg-white text-dark border-0"><b>CONTACT</b></button></div>
                        </fieldset>
                    </form>
                    </div>
            </section>
             <!-- Fin sección Quinta -->
    </main>


<?php endwhile; ?>

<?php get_footer(); ?>
