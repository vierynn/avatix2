<?php 
    session_start();
    if(isset($_SESSION['status']))
    {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Make sure to stream SOLO by JENNIE!</strong> <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        unset($_SESSION['status']);
    }
?>