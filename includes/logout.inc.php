<?php

session_start();
session_unset();
session_destroy();


// Going to back to front page
header("Location: ../index.php?error=none");