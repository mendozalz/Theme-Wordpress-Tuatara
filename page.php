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
    <section class="secundaria container bg-white h-30 m-auto d-flex py-4 p-5">
        <div class="col-3 d-flex align-items-center">
            <?php 
                    $imgTuatara = get_field('imagen_tuatara');
                    $tituloBanner1 = get_field('titulo_banner_1');
                    $tituloBanner2 = get_field('titulo_banner_2');
                    if($imgTuatara && $tituloBanner1 && $tituloBanner2){
                    echo  '<img class="w-tuatara" src="'. esc_url($imgTuatara) . '" alt="tuatara">
                          <h3>'.$tituloBanner1.'<br><span class="fw-light">'.$tituloBanner2.'</span></h3>
                    ';
                    } 
                    ?>
        </div>
        <div class="col-9 d-flex align-items-center">
            <?php
                    $description = get_field('descripcion');
                    if($description){
                    echo '
                    <p class="text-dark">'.$description.'</p>
                    ';
                    }
                    ?>
        </div>
    </section>
    <!-- Fin sección secundaria -->
    <!-- Sección Terciaria -->
    <section class="terciaria d-flex align-items-center">
        <div class="col-img-escritorio col-6 d-flex align-items-center justify-content-end h-100">
            <?php
                    $imagenEscritorio = get_field('imagen_escritorio'); 
                    if($imagenEscritorio){
                    echo '
                    <img id="escritorio-tecnologia" src="'.esc_url($imagenEscritorio).'" alt="escritorio y técnologia">
                    ';
                    }
                    ?>
        </div>
        <div class="col-6 pe-extra">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <?php
                    $sofwearTech = get_field('titulo_software');
                    $sofwearTechDesciption = get_field('descripcion_1');                   
                    if($sofwearTech && $sofwearTechDesciption){
                    echo '
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    <b>'.$sofwearTech.'</b>
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            '.$sofwearTechDesciption.'
                        </div>
                    </div>
                    ';
                    }
                    ?>
                </div>
                <div class="accordion-item">
                    <?php
                    $pureDesign = get_field('titulo_pure_desing');
                    $pureDesignDesciption = get_field('descripcion_2');
                    $badge1 = get_field('badge_1');
                    $badge2 = get_field('badge_2');
                    $badge3 = get_field('badge_3');
                    $badge4 = get_field('badge_4');
                    if ($pureDesign && $pureDesignDesciption) {
                        echo '
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                <b>' . $pureDesign . '</b>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                ' . $pureDesignDesciption . '
                            </div>
                        </div>
                        <div class="badge-container d-flex justify-content-evenly">
                            <span class="w-20 badge rounded-pill">'.$badge1.'</span>
                            <span class="w-20 badge rounded-pill">'.$badge2.'</span>
                            <span class="w-20 badge rounded-pill">'.$badge3.'</span>
                            <span class="w-20 badge rounded-pill">'.$badge4.'</span>
                        </div>
                        ';
                    }
                    ?>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <?php
                    $marketing = get_field('titulo_marketing');
                    $marketingDesciption = get_field('descripcion_3');                   
                    if($marketing && $marketingDesciption){
                    echo '
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <b>'.$marketing.'</b> 
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                    '.$marketingDesciption.'
                        </div>
                    </div>
                    ';
                    }
                    ?>
                </div>
    </section>
    <!-- Fin sección Terciaria -->

    <!-- Sección Cuarta -->
    <section class="cuarta carrusel fluid d-flex">
        <div class="slider-left col-4 h-100 d-flex align-items-start">
            <div class="card fluid glassmorphismo">
                <?php
                    $ourPortafolio = get_field('titulo_4');
                    $subTitulo = get_field('sub-titulo');
                    $description4 = get_field('descripcion_4');
                    if($ourPortafolio && $subTitulo && $description4){
                    echo '  <div class="card-body">
                            <h4 class="card-title">'.$ourPortafolio.'</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">'.$subTitulo.'</h6>
                            <p class="card-text">'.$description4.'</p>
                            </div>
                </div>';

                    }
                    ?>
            </div>
            <?php 
                    $slider1 = get_field('slider_imagen_1');
                    $tituloSlider1 = get_field('titulo_imagen_1');
                    $descriptionSlider1 = get_field('descripcion_imagen_1');

                    $slider2 = get_field('slider_imagen_2');
                    $tituloSlider2 = get_field('titulo_imagen_2');
                    $descriptionSlider2 = get_field('descripcion_imagen_2');
                    
                    $slider3 = get_field('slider_imagen_3');
                    $tituloSlider3 = get_field('titulo_imagen_3');
                    $descriptionSlider3 = get_field('descripcion_imagen_3');
                    if(
                        $slider1 && $tituloSlider1 && $descriptionSlider1 &&
                        $slider2 && $tituloSlider2 && $descriptionSlider2 &&
                        $slider3 && $tituloSlider3 && $descriptionSlider3
                        ){
                    echo '
                    <div class="slider-right col-8 h-100 d-flex flex-column justify-content-start">
                    <div id="carouselExampleCaptions" data-bs-ride="carousel"  class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="'.$slider1.'" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">'.$tituloSlider1.'</h5>
                                <p class="text-dark">'.$descriptionSlider1.'</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="'.$slider2.'" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">'.$tituloSlider2.'</h5>
                                <p class="text-dark">'.$descriptionSlider2.'</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="'.$slider3.'" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">'.$tituloSlider2.'</h5>
                                <p class="text-dark">'.$descriptionSlider3.'</p>
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
                    ';
                    }
                ?>
    </section>
    <!-- Fin sección Cuarta -->

    <!-- Sección Quinta -->
    <section id="contact" class="quinta formulario fluid d-flex">
        <?php 
                $imagenFormulario = get_field('imagen_5');
                $tituloFormulario = get_field('titulo_5');
                $subTituloFormulario = get_field('sub-titulo_5');
                $placeHolderNombre = get_field('place_holder_nombre');
                $placeHolderEmail = get_field('place_holder_email');
                $placeHolderPhone = get_field('place_holder_phone');
                $placeHolderObservacion = get_field('place_holder_observacion');
                $btnContact = get_field('btn_contact');
                if(
                    $imagenFormulario && $tituloFormulario && $subTituloFormulario && $placeHolderNombre && $placeHolderEmail && $placeHolderPhone && $placeHolderObservacion
                    ){
                    echo '
                    <div class="col-5">
                    <img class="img-descansando" src="'.$imagenFormulario.'" alt="sujeto descansando">
                    </div>
                    <div class="col-7">
                    <form class="formulario">
                        <fieldset>
                            <h2><b>'.$tituloFormulario.'</b> <span class="fw-light">US</span></h2>
                            <h6>'.$subTituloFormulario.'</h6>
                            <div class="mb-3 mt-4">
                            <input type="text" class="form-control form-contact" placeholder="'.$placeHolderNombre.'">
                            <input type="email" class="form-control form-contact" placeholder="'.$placeHolderEmail.'">
                            <input type="tel" class="form-control form-contact" placeholder="'.$placeHolderPhone.'">
                            <input type="text" class="form-control form-contact" placeholder="'.$placeHolderObservacion.'">
                            </div>
                            <div class="btn-container fluid d-flex justify-content-end mt-5"><button id="btn_submit" type="submit" class="btn btn-primary rounded-pill px-5 bg-white text-dark border-0"><b>'.$btnContact.'</b></button></div>
                        </fieldset>
                    </form>
                    </div>
                    ';
                }
                ?>
    </section>
    <!-- Fin sección Quinta -->
</main>


<?php endwhile; ?>

<?php get_footer(); ?>