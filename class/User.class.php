<?php
class User {
   private int $id;
   private string $login;
   private string $password;
   private string $firstName;
   private string $lastName;

   public function _construct(string $login, string $password) {
     $this->login = $login;
     $this->password = $password;
     $this->firstName = "";
     $this->lastName = "";

  }


  public function register() {
    $passwordHash = password_hash($this->password, PASSWORD_ARGON2I);
    $query = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?)";
    $db = new mysqli('localhost', 'root', '', 'loginForm');
    $preparedQuery = $db->prepare($query);
    $preparedQuery->bind_param('ssss', $this->login, $passwordHash,  
                                        $this->firstName, $this->lastName);
    $preparedQuery->execute();
  }                                     
} 
?>