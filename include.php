<?php

include "models/Admin.php";
include "support/Router.php";
include "core/connection.php";
include "controllers/Controller.php";
include "controllers/AuthController.php";
include "controllers/AdminController.php";

// check login user
include "middleware/auth.php";