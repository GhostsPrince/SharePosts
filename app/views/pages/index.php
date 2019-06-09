<?php
$currentTime = time();
?>
<?php require APPROOT . '/views/inc/header.php'; ?>

  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container mb-5  "
        style="margin-top: -5%"
    >
        <div class="time float-right ">
            <h6><?php echo date("l g:i a", $currentTime); ?></h6>
            <h6><?php echo date("jS F, Y",$currentTime); ?></h6>
        </div>
    </div>
      <div class="container mt-5 ">
          <h4 class="display-3"><?php echo $data['title']; ?></h4>
      </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>