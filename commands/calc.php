<?php

// Launch calculator on windows.
exec('calc');

// Redirect back to index.php / where ever link was clicked.
header('Location: ' . $_SERVER['HTTP_REFERER']);

