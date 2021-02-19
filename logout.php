<?php
session_unset();
session_destroy();
global $base_url;
header("Location: $base_url/index.php");
