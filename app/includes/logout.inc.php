<?php

session_start();
session_unset();
session_destroy();

// going back to Login
header("location: ../../public/public_html/auth/login.php?error=none");