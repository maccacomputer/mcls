<?php
session_start();

if (isset($_SESSION['session_id'])) {
    $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
    $session_id = htmlspecialchars($_SESSION['session_id']);
    
    printf("Welcome %s, your session ID is %s", $session_user, $session_id);
    echo "<br>";
    printf("%s", '<a href="logout.php">logout</a>');
} else {
    printf("Make the %s to access the reserved area", '<a href="../login.html">login</a>');
}