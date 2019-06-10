<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-fluid"
    >
        <div class="container text-center">
            <h1 class="display-4">Some Info About This App</h1>
            <hr class="my-4">
            <h1><?php echo $data['title']; ?></h1>
            <p class="lead"><?php echo $data['description']; ?></p>
            <p class="lead"> Version : <strong><?php echo APPVERSION; ?><strong></p>
            <hr>


        </div>
        <div class="container text-center">
            <h6 class="display-4">Developers </h6>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo URLROOT; ?>/public/img/Trist.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4>Tristan Kadagishvili</h4>
                            <b>Backend Developer</b>
                            <br>
                            <a
                                    href="https://github.com/GhostsPrince"
                                    target="_blank"
                                    class="btn btn-git btn-dark  btn-block mt-2"><i class="fa fa-github pr-1"></i>
                                Github</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img
                                class="card-img-top" src="<?php echo URLROOT; ?>/public/img/Art.jpg"
                                alt="Card image cap">
                        <div class="card-body">
                            <h4>Artur Zakharyan</h4>
                            <b>Frontend Developer</b>
                            <br>
                            <a
                                    href="https://github.com/ArtZ23"
                                    target="_blank"
                                    class="btn btn-git btn-dark  btn-block mt-2"><i class="fa fa-github pr-1"></i>
                                Github</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo URLROOT; ?>/public/img/Sasha.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4>Sandro Palavandishvili</h4>
                            <b>Backend Developer</b>
                            <br>
                            <a
                                    href="https://github.com/votz"
                                    target="_blank"
                                    class="btn btn-git btn-dark  btn-block mt-2"><i class="fa fa-github pr-1"></i>
                                Github</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>