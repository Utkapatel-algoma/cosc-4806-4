    <?php require_once 'app/views/templates/header.php' ?>
    <div class="container">
        <div class="page-header" id="banner">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Reminders</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php if (!empty($list_of_reminders)): ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Subject</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_of_reminders as $reminder): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($reminder['id']); ?></td>
                                    <td><?php echo htmlspecialchars($reminder['user_id']); ?></td>
                                    <td><?php echo htmlspecialchars($reminder['subject']); ?></td>
                                    <td><?php echo htmlspecialchars($reminder['created_at']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>No reminders found.</p>
                <?php endif; ?>
            </div>
        </div>

        <?php require_once 'app/views/templates/footer.php' ?>
    </div>
