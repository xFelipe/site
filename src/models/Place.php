<?php
    class Place {
        private $id;

        private $name;

        private $description;

        private $address;

        private $phone;

        private $email;

        private $cnpj;

        private $latitude;

        private $longitude;

        private $products_count = 0;

        private $rank = 0;

        private $logo;

        private $total_views = 0;

        private $slug;

        public function __construct(Array $data = []) {
            if (!empty($data['id']))
                $this->id = $data['id'];

            if (!empty($data['name']))
                $this->name = $data['name'];

            if (!empty($data['description']))
                $this->description = $data['description'];

            if (!empty($data['address']))
                $this->address = $data['address'];

            if (!empty($data['phone']))
                $this->phone = $data['phone'];

            if (!empty($data['email']))
                $this->email = $data['email'];

            if (!empty($data['cnpj']))
                $this->cnpj = $data['cnpj'];

            if (!empty($data['latitude']))
                $this->latitude = $data['latitude'];

            if (!empty($data['longitude']))
                $this->longitude = $data['longitude'];

            if (!empty($data['products_count']))
                $this->products_count = $data['products_count'];

            if (!empty($data['rank']))
                $this->rank = $data['rank'];

            if (!empty($data['logo']))
                $this->logo = $data['logo'];

            if (!empty($data['total_views']))
                $this->total_views = $data['total_views'];

            if (!empty($data['slug']))
                $this->slug = $data['slug'];
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setAddress($address){
            $this->address = $address;
        }

        public function getPhone(){
            return $this->phone;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function getLatitude(){
            return $this->latitude;
        }

        public function setLatitude($latitude){
            $this->latitude = $latitude;
        }

        public function getLongitude(){
            return $this->longitude;
        }

        public function setLongitude($longitude){
            $this->longitude = $longitude;
        }

        public function getProducts_count(){
            return $this->products_count;
        }

        public function setProducts_count($products_count){
            $this->products_count = $products_count;
        }

        public function getRank(){
            return $this->rank;
        }

        public function setRank($rank){
            $this->rank = $rank;
        }

        public function getLogo(){
            return $this->logo;
        }

        public function setLogo($logo){
            $this->logo = $logo;
        }

        public function getTotal_views(){
            return $this->total_views;
        }

        public function setTotal_views($total_views){
            $this->total_views = $total_views;
        }

        public function getSlug(){
            return $this->slug;
        }

        public function setSlug($slug){
            $this->slug = $slug;
        }

    }
?>
