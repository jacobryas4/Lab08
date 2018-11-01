<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'ComposerAutoloaderInit6fe49a815b76a52fac5b06eb922e8dbc' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit6fe49a815b76a52fac5b06eb922e8dbc' => $vendorDir . '/composer/autoload_static.php',
    'Database' => $baseDir . '/application/database.class.php',
    'Index' => $baseDir . '/views/index/index.class.php',
    'Login' => $baseDir . '/views/login/login.class.php',
    'Logout' => $baseDir . '/views/logout/logout.class.php',
    'Register' => $baseDir . '/views/index/register.class.php',
    'Reset' => $baseDir . '/views/reset/reset.class.php',
    'ResetConfirm' => $baseDir . '/views/reset/reset_confirm.class.php',
    'UserController' => $baseDir . '/controllers/user_controller.class.php',
    'UserError' => $baseDir . '/views/error/user_error.class.php',
    'UserModel' => $baseDir . '/models/user_model.class.php',
    'VerifyUser' => $baseDir . '/views/login/verify_user.class.php',
    'View' => $baseDir . '/views/view.class.php',
);
