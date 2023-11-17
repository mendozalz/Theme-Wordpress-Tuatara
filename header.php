<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuatara</title>
    <?php wp_head() ?>
</head>

<body>
    <!-- Full screen modal -->
    <nav class="navbar navbar-expand-lg py-4 justify-content-end">
        <div class="container container-fluid">
            <a class="navbar-brand" href="#"><img src="/wp-content/uploads/2023/11/logo.png" alt="Bootstrap"
                    width="auto" height="32"></a>
                  <button class="navbar-toggler tablet" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            <!-- modal -->
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                tabindex="-1">
                <div class="modal-dialog modal-fullscreen-sm-down">
                    <div class="modal-content">
                      <div class="modal-body">
                          <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-4">
                        <a class="nav-link active text-light" aria-current="page" href="#">Full Services</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-light" href="#">World wide</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-light" aria-disabled="true"><img id="el-nido"
                                src="/wp-content/themes/Tuatara-dev/assets/logo-nido.png" alt="nido" width="auto"
                                height="30"></a>
                    </li>
                    <li class="nav-item px-4">
                        <a id="a-contact" class="nav-link text-light" href="#contact" >Contact</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="idiomas nav-link text-light" href="#">ES | EN</a>
                    </li>
                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <button class="movil navbar-toggler" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"><span class="navbar-toggler-icon"></button>
            <!--  -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-4">
                        <a class="nav-link active text-light" aria-current="page" href="#">Full Services</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-light" href="#">World wide</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-light" aria-disabled="true"><img id="el-nido"
                                src="/wp-content/themes/Tuatara-dev/assets/logo-nido.png" alt="nido" width="auto"
                                height="30"></a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-light" href="#">Contact</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-light" href="#">ES | EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>