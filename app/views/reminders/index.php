<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p><a href="/reminders/create">Create a new reminder</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php if (!empty($data['reminders'])): ?>
                <?php foreach ($data['reminders'] as $reminder): ?>
                    <p>
                        <?php echo htmlspecialchars($reminder['subject']); ?>
                        <a href="/reminders/show/<?php echo htmlspecialchars($reminder['id']); ?>">view</a>
                        <a href="/reminders/update/<?php echo htmlspecialchars($reminder['id']); ?>">update</a>
                        <a href="/reminders/delete/<?php echo htmlspecialchars($reminder['id']); ?>">delete</a>
                    </p>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No reminders found.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
</div>
