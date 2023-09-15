<?php

class PageModel {
    public $id;
    public $user;
    public $register;
    public $title;
    public $content;
    public $style;
    public $script;
    public $template;

    public function __construct() {
        $this->register = require('sys/config/pages_config.php');
        $this->id = $this->get_id();
        $this->user = $this->get_user();
        $this->title = $this->register[$this->id];
        $this->content = "app/pages/{$this->id}.php";
        $this->style = "res/styles/{$this->id}.css";
        $this->script = "res/scripts/{$this->id}.js";
        $this->template = 'app/layouts/base.php';
    }

    private function get_id() {
        if (isset($_GET['id'])) {
            return $_GET['id'];
        } else {
            return 'main';
        }
    }

    private function get_user() {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        } else {
            if (isset($_COOKIE['user'])) {
                return $_COOKIE['user'];
            } else {
                return 'Гість';
            }
        }
    }

    public function load() {
        include($this->template);
    }
}