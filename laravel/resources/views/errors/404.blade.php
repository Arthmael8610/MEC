<?php
/**
 * Created by PhpStorm.
 * User: arthm
 * Date: 8/17/2018
 * Time: 1:28 PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>404 | Citizen Warfare</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- CSS Unify -->
    <link rel="stylesheet" href="/assets/css/unify-core.css">
    <link rel="stylesheet" href="/assets/css/unify-components.css">
    <link rel="stylesheet" href="/assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body class="g-bg-gray-dark-v1 g-color-white">
<main class="g-height-100x g-min-height-100vh g-flex-centered g-pa-15">
    <div class="text-center g-flex-centered-item g-position-rel">
        <div class="g-font-size-180 g-font-size-240--sm g-font-size-420--lg g-line-height-1 g-font-weight-200 g-color-gray-dark-v2">404</div>

        <div class="g-absolute-centered">
            @if($data)
                <h3>
                    <p>
                        {{ $exception->getMessage() }}
                    </p>
                </h3>
            @endif
            <h1 class="g-font-weight-200 g-mb-20">Page&nbsp;Not&nbsp;Found</h1>
            <p class="g-color-white-opacity-0_6 g-font-size-18">Oops! Looks like you followed a&nbsp;bad&nbsp;link.</p>
            <p class="g-color-white-opacity-0_6 g-font-size-18">If you think this is a problem with us, please&nbsp;<a href="mailto::support@citizenwarfare.com" class="g-color-white g-color-primary--hover g-text-no-underline--hover">tell us</a>.</p>
            <p class="g-color-white-opacity-0_6 g-font-size-18 mb-0">Here is a link to the <a href="/" class="g-color-white g-color-primary--hover g-text-no-underline--hover">home page</a>.</p>
        </div>

    </div>
</main>

<!-- JS Global Compulsory -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>


<!-- JS Custom -->
<script src="/assets/js/custom.js"></script>
</body>

</html>

