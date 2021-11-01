<?php
exec('calc');

header('Location: ' . $_SERVER['HTTP_REFERER']);

