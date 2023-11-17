<footer class="footer bg-white text-dark d-flex align-items-center">
    <?php
    $col_1 = get_field('titulo_columna_1');
    $campo1 = get_field('campo_1');
    $campo2 = get_field('campo_2');
    $campo3 = get_field('campo_3');
    $campo3_4 = get_field('campo_3_4');

    $col_2 = get_field('titulo_columna_2');
    $campo4 = get_field('campo_4');
    $campo5 = get_field('campo_5');
    $campo6 = get_field('campo_6');
    $campo7 = get_field('campo_7');
    $campo8 = get_field('campo_8');
    $campo9 = get_field('campo_9');

    $col_3 = get_field('titulo_columna_3');
    $campo10 = get_field('campo_10');
    $campo11 = get_field('campo_11');
    $campo12 = get_field('campo_12');
    $campo13 = get_field('campo_13');

    $col_4 = get_field('titulo_imagen_columna_4');
    $campoDescripcion = get_field('campo_14_descripcion');
    $marcaRegistrada = get_field('marca_registrada');
    $icon_1 = get_field('icono_1');
    $url_icono_1 = get_field('url_icono_1');
    $icon_2 = get_field('icono_2');
    $url_icono_2 = get_field('url_icono_2');
    $icon_3 = get_field('icono_3');
    $url_icono_3 = get_field('url_icono_3');
    $icon_4 = get_field('icono_4');
    $url_icono_4 = get_field('url_icono_4');


    /* Formulario del Header */

    $campo_btn = get_field('btn_enviar');
    $campo_placeHolder = get_field('placeholder');


    if(
        $col_1 && $campo1 && $campo2 && $campo3 && $campo3_4 &&
        $col_2 && $campo4 && $campo5 && $campo5 && $campo5 && $campo6 && $campo7 && $campo8 && $campo9 &&
        $col_3 && $campo10 && $campo11 && $campo11 && $campo12 && $campo13 &&
        $col_4 && $campoDescripcion && $marcaRegistrada && $icon_1 && $url_icono_1 && $icon_2 && $url_icono_2 && $icon_3 && $url_icono_3 && $icon_4 && $url_icono_4 &&
        $campo_btn && $campo_placeHolder
    ){
        echo '
        <div class="container py-4">
        <div class="row mb-4">
            <!-- Primera columna -->
            <div class="col-md-3 w-20">
                <h5 class="text-dark mb-4">'.$col_1.'</h5>
                <p class="text-dark">'.$campo1.'</p>
                <a class="text-dark text-decoration-none" href="'.$campo2.'">'.$campo2.'</a>
                <p class="text-dark">C'.$campo3_4.'</p>
                <a class="text-dark text-decoration-none" href="'.$campo3.'">'.$campo3.'</a>
            </div>

            <!-- Segunda columna -->
            <div class="col-md-3 w-20">
                <h5 class="text-dark mb-4">'.$col_2.'</h5>
                <p class="text-dark">'.$campo4.'</p>
                <p class="text-dark">'.$campo5.'</p>
                <p class="text-dark">'.$campo6.'</p>
                <p class="text-dark">'.$campo7.'</p>
                <p class="text-dark">'.$campo8.'</p>
                <p class="text-dark">'.$campo9.'</p>
            </div>

            <!-- Tercera columna -->
            <div class="col-md-3 w-20">
                <h5 class="text-dark mb-4">'.$col_3.'</h5>
                <p class="text-dark">'.$campo10.'</p>
                <p class="text-dark">'.$campo11.'</p>
                <p class="text-dark">'.$campo12.'</p>
                <p class="text-dark">'.$campo13.'</p>
            </div>

            <!-- Cuarta columna -->
            <div class="col-md-3 w-40">
                <div class="tablet">
                    <!-- Logo "El Nido" y descripción -->
                    <img id="logo-el-nido" src="'
                    .$col_4.'" alt="logo el nido">
                    <p class="mt-4 fs-arbitrary">'.$campoDescripcion.'</p>
                </div>

                <!-- Campo de formulario -->
                <div class="input-group mb-3 w-30-stricto mt-5">
                    <input type="text" class="form-control rounded-start-pill ps-4" placeholder="' .$campo_placeHolder. '" aria-label="Recipients username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary rounded-pill ml-negativo text-light" type="button" id="button-addon2">'. $campo_btn . '</button>
                </div>
                
            </div>
        </div>

        <!-- hr-->
        <hr class="my-3">

        <div class="row">
            <!-- Texto Marca Registrada a la izquierda-->
            <div class="col-md-6">
                <p class="mb-0 text-dark">'.$marcaRegistrada.'</p>
            </div>

            <!-- Iconos de redes sociales a la derecha -->
            <div class="col-md-6 redes">
                <a href="'.$url_icono_1.'" class="text-dark">
                    <img class="logo-redes behance" src="'.$icon_1.'" alt="behance">
                </a>
                <a href="'.$url_icono_2.'" class="text-dark">
                    <img class="logo-redes" src="'.$icon_2.'" alt="Linkedin">
                </a>
                <a href="'.$url_icono_3.'" class="text-dark">
                    <img class="logo-redes" src="'.$icon_3.'" alt="Instagram">
                </a>
                <a href="'.$url_icono_4.'" class="text-dark">
                    <img class="logo-redes" src="'.$icon_4.'" alt="Facebook">
                </a>
            </div>
        </div>
    </div>
        ';
    } 
    ?>
</footer>

<!-- scripts de WP -->
<?php wp_footer(); ?>
</body>
</html>
