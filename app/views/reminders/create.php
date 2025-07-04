<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Create New Reminder</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="/reminders/store" method="POST">
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
</div>
