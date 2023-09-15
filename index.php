<?php

session_start();
require('sys/lib/page_model.php');
$page = new PageModel();
$page->load();