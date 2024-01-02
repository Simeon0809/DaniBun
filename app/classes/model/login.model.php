<?php 

class LoginModel extends DatabaseHandler{

    protected function getUser($email, $password){
        $stmt = $this->conn()->prepare('SELECT * FROM users WHERE email = ?;');
        
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header('location: ../../public/public_html/auth/login.php?error=stmtFailed');
            exit();
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            $stmt = null;
            header("location: ../../public/public_html/auth/login.php?error=404-UserNotFound");
            exit();
        }
        $checkPassword = password_verify($password, $user["password"]);

        if (!$checkPassword) {
            $stmt = null;
            header("location: ../../public/public_html/auth/login.php?error=wrongPassword");
            exit();
        } else {
            session_start();
            $_SESSION["userId"] = $user['id'];
            $_SESSION["username"] = $user['username'];
        }

        $stmt = null;
    }
}
