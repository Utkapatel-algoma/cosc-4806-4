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
                $reminder->add_reminder(1, $subject); 
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

    public function show($id = '') {
        // This method will display a single reminder
        $reminder = $this->model('Reminder');
        $single_reminder = $reminder->get_reminder_by_id($id);
        $this->view('reminders/show', ['reminder' => $single_reminder]);
    }

    public function update($id = '') {
        $reminder = $this->model('Reminder');
        $single_reminder = $reminder->get_reminder_by_id($id);
        $this->view('reminders/update', ['reminder' => $single_reminder]);
    }

    public function saveUpdate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? '';
            $subject = $_POST['subject'] ?? '';

            if (!empty($id) && !empty($subject)) {
                $reminder = $this->model('Reminder');
                $reminder->update_reminder($id, $subject);
                header('Location: /reminders');
                exit();
            } else {
                header('Location: /reminders');
                exit();
            }
        } else {
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
