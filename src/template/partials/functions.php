<?php
    function getFooter(array $value = null) { ?>
        <script src="/js/jquery-1.12.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/propeller.min.js"></script></html> <?php
    }

    function getPageHeader(array $value = null) { ?>
        <!doctype html>
        <html lang="pt-BR">
        	<head>
        		<meta charset="utf-8">
        		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        		<meta name="description" content="<?php echo $value['description'] ?>">
        		<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

                <title><?php echo $value['page-title'] ?></title>

                <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

        		<!-- Google icons -->
        		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        		<!-- Bootstrap css -->
        		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

        		<!-- Propeller css -->
        		<link rel="stylesheet" type="text/css" href="/css/propeller.css">
        		<link rel="stylesheet" type="text/css" href="/theme/css/propeller-theme.css"/>
        		<link rel="stylesheet" type="text/css" href="/theme/css/propeller-admin.css">

                <?php
                    if( isset($value['login']) ): ?>
                        <link rel="stylesheet" type="text/css" href="/css/login.css"> <?php
                    else: ?>
                        <link rel="stylesheet" type="text/css" href="/css/card.css"> <?php
                    endif;
                ?>

                <link rel="stylesheet" type="text/css" href="/css/custom.css">
        	</head>
         <?php
    }

    function getNavbar() {
        require '../src/template/partials/navbar.php';
    }
?>
