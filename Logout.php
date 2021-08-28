<?php
	
	session_start();
	session_unset();
	session_destroy();
	echo ("<script>
    window.alert('Successfully logged out.');
    window.location.href='index.php';
    </script>");
?>