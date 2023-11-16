<footer class="footer bg-white text-dark d-flex align-items-center">
                <div class="container py-4">
                    <div class="row mb-4">
                        <div class="col-md-3 w-20">
                            <!-- Primera columna -->
                            <h5 class="text-dark mb-4">CONTACT</h5>
                            <p class="text-dark">Bogotá | Colombia</p>
                            <a class="text-dark text-decoration-none" href="mailto:hablemos@tuatara.co">hablemos@tuatara.co</a>
                            <p class="text-dark">Cr 20 # 142 - 23</p>
                            <a class="text-dark text-decoration-none" href="tel:+573002100127">(57) (1) 3002100127</a>
                        </div>
                        <div class="col-md-3 w-20">
                            <!-- Segunda columna -->
                            <h5 class="text-dark mb-4">ABOUT US</h5>
                            <p class="text-dark">Home</p>
                            <p class="text-dark">Software and Tech</p>
                            <p class="text-dark">Pure Desing</p>
                            <p class="text-dark">Marketing</p>
                            <p class="text-dark">Contact</p>
                            <p class="text-dark">Coworking</p>

                        </div>
                        <div class="col-md-3 w-20">
                            <!-- Tercera columna -->
                            <h5 class="text-dark mb-4">ABOUT US</h5>
                            <p class="text-dark">Facebook</p>
                            <p class="text-dark">Instagram</p>
                            <p class="text-dark">Linkedin</p>
                            <p class="text-dark">Behance</p>
                        </div>
                        <div class="col-md-3 w-40">
                            <!-- Cuarta columna -->
                            <img id="logo-el-nido" src="/wp-content/themes/Tuatara-dev/assets/logo-nido.png" alt="logo el nido">
                            <p class="mt-4 fs-arbitario">Good Relations are the base of our success. There is no better testimonial that our clients, newly friends.</p>
                            <?php
                            $campo_btn = get_field('btn_enviar');
                            $campo_placeHolder = get_field('placeholder');
                            if($campo_btn && $campo_placeHolder){
                            echo '<div class="input-group mb-3 w-30-stricto mt-5">
                            <input type="text" class="form-control rounded-start-pill ps-4" placeholder="' .$campo_placeHolder. '" aria-label="Recipients username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary rounded-pill ml-negativo text-light" type="button" id="button-addon2">'. $campo_btn . '</button>
                            </div>';
                            }
                            ?>
                    </div>
                    </div>
                    <hr class="my-3">
                    <div class="row">
                    <div class="col-md-6">
                        <!-- Texto "Tuatara Company" a la izquierda -->
                        <p class="mb-0 text-dark">&copy; 2023 by Tuatara</p>
                    </div>
                    <div class="col-md-6 redes">
                        <!-- Iconos de redes sociales a la derecha -->
                        <a href="#" class="text-dark">
                            <img class="logo-redes behance" src="/wp-content/themes/Tuatara-dev/assets/Behance.png" alt="behance">
                        </a>
                        <a href="#" class="text-dark">
                            <img class="logo-redes" src="/wp-content/themes/Tuatara-dev/assets/Linkedin.png" alt="Linkedin">
                        </a>
                        <a href="#" class="text-dark">
                            <img class="logo-redes" src="/wp-content/themes/Tuatara-dev/assets/instagram.png" alt="Instagram">
                        </a>
                        <a href="#" class="text-dark">
                            <img class="logo-redes" src="/wp-content/themes/Tuatara-dev/assets/Facebook.png" alt="Facebook">
                        </a>
                    </div>
                    </div>
                </div>
            </footer>

<?php wp_footer(); ?>
</body>
</html>