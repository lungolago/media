<?php
    //Check to see if any messages are set
    if(isset($_SESSION['message'])) :
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey!</strong> <?= $_SESSION['message']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
    //delete the message after displaying it
    unset($_SESSION['message']);
    endif;
?>