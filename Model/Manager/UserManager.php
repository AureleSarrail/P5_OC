<?php
namespace Model\Manager;

use Model\Entity\User;

class UserManager extends Model
{
    public function getUser($mail)
    {
        $dataBase = $this->dbConnect();
        $query = $dataBase->prepare('select userid,name,firstname,username,mail,rights
                               from user
                               where mail = ?');
        $query->execute(array($mail));
        $data = $query->fetch(\PDO::FETCH_ASSOC);
        $user = new User();
        $user->hydrate($data);
        return $user;
    }

    public function createUser($firstname, $name, $username, $mail, $password)
    {
        $dataBase = $this->dbConnect();
        $user = new User();
        $data['firstname'] = htmlspecialchars($firstname);
        $data['name'] = htmlspecialchars($name);
        $data['username'] = htmlspecialchars($username);
        $data['mail'] = htmlspecialchars($mail);
        $pass = password_hash($password,PASSWORD_DEFAULT);
        $user->hydrate($data);
        $insert = $dataBase->prepare('insert into user (Name,Firstname,Username,Mail,Password,Rights) 
                                    values (?,?,?,?,?,2)');
        $insert->execute(array($user->getName(),$user->getFirstName(),$user->getUsername(),$user->getMail(),$pass));
    }
}
