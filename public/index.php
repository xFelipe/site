<?php
	session_cache_limiter(false);
	session_start();
	error_reporting(E_ALL);

	require '../vendor/autoload.php';
	require '../src/template/partials/functions.php';
	use Psr\Http\Message\RequestInterface as Request;
	use Psr\Http\Message\ResponseInterface as Response;

	$app = new \Slim\App(array(
		'settings' => [
	        'displayErrorDetails' => true
	    ]
	));
    $container = $app->getContainer();
	$container['view'] = function ($container) {
		return new \Slim\Views\PhpRenderer('../src/template');
	};

	/*
	 *
	 * Função para ignorar a presença ou a falta de '/' no link
	 *
	 */
	$app->add(function (Request $request, Response $response, callable $next) {
	    $uri = $request->getUri();
	    $path = $uri->getPath();
	    if ($path != '/' && substr($path, -1) == '/') {
	        $uri = $uri->withPath(substr($path, 0, -1));
	        if($request->getMethod() == 'GET')
	            return $response->withRedirect((string)$uri, 301);
	        else
	            return $next($request->withUri($uri), $response);
	    }
	    return $next($request, $response);
	});

	$routers = glob('../routers/*.php');

    foreach ($routers as $router) {
        require $router;
    }



    $app->run();
?>
