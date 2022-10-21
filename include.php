<?php

include "route.php";
include "controllers/AdminController.php";
include "controllers/AuthController.php";
include "models/Admin.php";
include "core/connection.php";

// check login user
include "middleware/auth.php";