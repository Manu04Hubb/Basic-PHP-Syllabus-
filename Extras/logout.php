<?php
echo session_start();

// destroy the session
echo session_destroy();
echo header('Location: xampp/htdocs/Backendphp/13_sessions.php');