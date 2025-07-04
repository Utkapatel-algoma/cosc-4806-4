<?php

class Reminders extends Controller {

    public function index() {
        $reminder = $this->model('Reminder');
        $list_of_reminders = $reminder->get_all_reminders();
        $this->view('reminders/index', ['reminders' => $list_of_reminders]);
    }

    public function create() {
        $this->view('reminders/create');
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $subject = $_POST['subject'] ?? '';

            if (!empty($subject)) {
                $reminder = $this->model('Reminder');
                $reminder->add_reminder(1, $subject); // User ID is hardcoded as 1 for now
                header('Location: /reminders');
                exit();
            } else {
                header('Location: /reminders/create');
                exit();
            }
        } else {
            header('Location: /reminders/create');
            exit();
        }
    }

    public function update($id = '') {
        $reminder = $this->model('Reminder');
        $single_reminder = $reminder->get_reminder_by_id($id);
        $this->view('reminders/update', ['reminder' => $single_reminder]);
    }

    public function saveUpdate() {
        // This method will handle the form submission from update.php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? '';
            $subject = $_POST['subject'] ?? '';

            if (!empty($id) && !empty($subject)) {
                $reminder = $this->model('Reminder');
                // Assuming you'll add an update_reminder method to your Reminder model
                $reminder->update_reminder($id, $subject);

                header('Location: /reminders'); // Redirect back to the reminders list after updating
                exit();
            } else {
                // Handle cases where ID or subject are empty
                // For now, redirect back to the reminders list
                header('Location: /reminders');
                exit();
            }
        } else {
            // changed code
            header('Location: /reminders');
            exit();
        }
    }

    public function delete($id = '') {
        $reminder = $this->model('Reminder');
        $reminder->delete_reminder($id);
        header('Location: /reminders');
        exit();
    }

}
