<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminder Details</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php if (!empty($data['reminder'])): ?>
                <p><strong>ID:</strong> <?php echo htmlspecialchars($data['reminder']['id']); ?></p>
                <p><strong>User ID:</strong> <?php echo htmlspecialchars($data['reminder']['user_id']); ?></p>
                <p><strong>Subject:</strong> <?php echo htmlspecialchars($data['reminder']['subject']); ?></p>
                <p><strong>Created At:</strong> <?php echo htmlspecialchars($data['reminder']['created_at']); ?></p>
                <p><a href="/reminders">Back to Reminders List</a></p>
            <?php else: ?>
                <p>Reminder not found.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
</div>
