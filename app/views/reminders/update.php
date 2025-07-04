<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Update Reminder</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php if (!empty($data['reminder'])): ?>
                <form action="/reminders/saveUpdate" method="POST">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['reminder']['id']); ?>">
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" value="<?php echo htmlspecialchars($data['reminder']['subject']); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update Reminder</button>
                </form>
            <?php else: ?>
                <p>Reminder not found.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
</div>
