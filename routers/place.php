<?php
    require '../src/controller/PlaceDAO.php';

    $app->get('/places/{ slug }', function ($request, $response) {
		$slug = $request->getAttribute("route")->getArgument("slug");

        $placeDAO = new PlaceDAO();
        $_place = $placeDAO->findPlaces($slug);
        $place = new Place( $_place[0] );

        $GLOBALS["commerce-page"] = $place;

        return $this->view->render($response, 'commerce-page.php');
    });
?>
