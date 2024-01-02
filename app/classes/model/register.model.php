<?php 

class RegisterModel extends DatabaseHandler{

    // Checking if user exists in the database (username/email)
    protected function checkUser($username, $email){
        $stmt = $this->conn()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');
    
        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header('location: ../../public/public_html/auth/register.php?error=stmtFailed');
            exit();
        }

        $resultCheck;
        
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

    protected function setUser($username, $email, $password){
        $roleGuest = 1;

        $stmt = $this->conn()->prepare('INSERT INTO users (username, email, password, user_role) VALUES (?, ?, ?, ?);');
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $email, $hashedPassword, $roleGuest))){
            $stmt = null;
            header('location: ../../public/public_html/auth/register.php?error=stmtFailed');
            exit();
        }

        $stmt = null;
    }
}