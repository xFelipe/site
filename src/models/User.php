<?php
    /**
     * @User @Table(name="user")
     **/
    class User {
        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="string", length=1500) **/
        private $name;

        /** @Column(type="string", length=300) **/
        private $password;

        /** @Column(type="string", length=300) **/
        private $email;

        /** @Column(type="string", length=30) **/
        private $cpf;

        /** @Column(type="string", length=150) **/
        private $avatar;

        public function __construct(Array $data = []) {
            if (!empty($data['id']))
                $this->id = $data['id'];

            if (!empty($data['name']))
                $this->name = $data['name'];

            if (!empty($data['email']))
                $this->email = $data['email'];

            if (!empty($data['password']))
                $this->password = $data['password'];

            if (!empty($data['cpf']))
                $this->cpf = $data['cpf'];

            if (!empty($data['avatar']))
                $this->avatar = $data['avatar'];
        }

        public function getId() {
           return $this->id;
        }

        public function getName() {
           return $this->name;
        }

        public function getEmail() {
           return $this->email;
        }

        public function getPassword() {
           return $this->password;
        }

        public function getCpf() {
           return $this->cpf;
        }

        public function getAvatar() {
           return $this->avatar;
        }

        public function __toArray() {
            $data = [];
            foreach ($this as $k=>$v)
            $data[$k] = $v;

            return $data;
        }
    }
?>
