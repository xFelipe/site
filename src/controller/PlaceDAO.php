<?php
    require '../src/models/Place.php';

    class PlaceDAO {
        public function create(array $data) {
            $place = new Place($data);
            return $place;
        }

        public function findPlaces($placeSlug = null) {
            $conn = getDB();

            if ($placeSlug !== null) {
                $stmt = $conn->prepare("SELECT * FROM place WHERE slug = :slug");
                $stmt->bindParam(':slug', $placeSlug);
            } else {
                $stmt = $conn->prepare("SELECT * FROM place");
            }

            $stmt->execute();
            $places = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $places;
        }
    }
?>
