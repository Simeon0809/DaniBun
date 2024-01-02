<?php 

    class LoginContr extends LoginModel{

        private $email;
        private $password;

        public function __construct($email, $password){
            $this->email = $email;
            $this->password = $password;
        }

        public function userLogin(){
            if($this->emptyInput() == false) {
                header('location: ../../public/public_html/auth/login.php?error=emptyInputs');
                exit();
            }

            $this->getUser($this->email, $this->password);
        }

        // This method checks if the fields are empty
        private function emptyInput(){
            $result;

            if(empty($this->email) || empty($this->password)){
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

    }