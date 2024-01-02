<?php 

    class RegisterContr extends RegisterModel{

        private $username;
        private $email;
        private $password;
        private $passwordRepeat;

        public function __construct($username, $email, $password, $passwordRepeat){
            $this->username = $username; 
            $this->email = $email;
            $this->password = $password;
            $this->passwordRepeat = $passwordRepeat;
        }

        public function userRegister(){
            if($this->emptyInput() == false) {
                header('location: ../../public/public_html/auth/register.php?error=emptyInputs');
                exit();
            }

            if($this->invalidEmail() == false) {
                header('location: ../../public/public_html/auth/register.php?error=invalidEmail');
                exit();
            }

            if($this->passwordCheck() == false) {
                header('location: ../../public/public_html/auth/register.php?error=invalidRepeatedPassword');
                exit();
            }

            if($this->userMatch() == false) {
                header('location: ../../public/public_html/auth/register.php?error=userAlreadyExists');
                exit();
            }

            $this->setUser($this->username, $this->email, $this->password);
        }

        // This method checks if the fields are empty
        private function emptyInput(){
            $result;

            if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->passwordRepeat)){
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        // This method checks if the email is valid
        private function invalidEmail(){
            $result;
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        // This method checks if the repeated password matches the original
        private function passwordCheck(){
            $result;
            if($this->password !== $this->passwordRepeat){
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        // This method checks if the user already exists (username/email)
        private function userMatch(){
            $result;
            if(!$this->checkUser($this->username, $this->email)){
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

    }