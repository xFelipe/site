<?php
    include(__DIR__ . './Database.php');
    require '../src/models/User.php';

    class UserDAO {
        public function create(array $data) {
            $user = new User($data);
            return $user;
        }

        public function findUsers($userID = null) {
            $conn = getDB();

            if ($userID !== null) {
                $stmt = $conn->prepare("SELECT * FROM user WHERE id = :id");
                $stmt->bindParam(':id', $userID);
            } else {
                $stmt = $conn->prepare("SELECT * FROM user");
            }

            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $users;
        }

        public function login($email = null, $password = null) {
            if ($email !== null and $password !== null) {
                $conn = getDB();

                $hash = hash('sha512', $password);

                $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hash);
                $stmt->execute();
                $userFromDB = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( count($userFromDB) > 0 ) {
                    $_SESSION["user"] = serialize( new User($userFromDB[0]) );
                    return true;
                } else {
                    return false;
                }
            }
            return false;
        }

        // TODO: CREATE DAO FUNCTIONS

        /*

        public function findByUsername($username, $array = true) {
            $repo = $this->em->getRepository('App\Entities\User');
            $user = $repo->findOneBy(['username'=>$username]);

            if ($array and $user)
                $user = $user->__toArray();

            return $user;
        }

        */
    }
?>
