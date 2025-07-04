<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
            </div>
        </div>
    </div>

    <?php
    // This line will display the raw array content at the top
    print_r($data['reminders']);
    ?>

    <?php require_once 'app/views/templates/footer.php' ?>
</div>
