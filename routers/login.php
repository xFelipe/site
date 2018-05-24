<?php
    require '../src/controller/UserDAO.php';

    $app->map(['GET', 'POST'], '/login', function ($request, $response, $args) use ($app) {
        if ( isset($_SESSION["user"]) ) {
            return $response->withRedirect('/');
        }

        if ($request->isPost()) {
            $user = new UserDAO();
            $data = $request->getParsedBody();

            if ( isset($data["login"]) and isset($data["password"]) ) {
                $logged = $user->login( trim($data["login"]), $data["password"] );

                if ($logged) {
                    return $response->withRedirect('/');
                } else {
                    return $response->withRedirect('/login?error=wrong');
                }
            }
            else if ( isset($data["cnpj"]) and isset($data["password"]) ) {
                echo "Você tá tentando entrar como comerciante";
            }
            else {
                echo "Você tá tentando entrar errado hehe";
            }
        } else {
            return $this->view->render($response, 'login.php');
        }
    });

    $app->get('/logout', function ($request, $response) {
        $_SESSION["user"] = null;
        session_destroy();
        return $this->view->render($response, 'login.php');
    });
?>
