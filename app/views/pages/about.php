<?php require APPROOT . '/views/inc/header.php'; ?>
<div class ="jumbotron jumbotron-fluid"
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
        <h6 class="display-4">Worked On It</h6>
        <ul style="list-style: none;">
            <li>Artur Zakharyan</li>
            <li>Tristan Kadagishvili</li>
            <li>Sandro Palavandishvili</li>
        </ul>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>