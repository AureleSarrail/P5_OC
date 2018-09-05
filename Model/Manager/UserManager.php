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
        $data = compact("firstname", "name", "username", "mail", "password");
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $user->hydrate($data);
        $insert = $dataBase->prepare('insert into user (Name,Firstname,Username,Mail,Password,Rights) 
                                    values (?,?,?,?,?,2)');
        $insert->execute(array($user->getName(), $user->getFirstName(), $user->getUsername(), $user->getMail(), $pass));
    }

    public function getUsers()
    {
        $dataBase = $this->dbConnect();
        $select = $dataBase->prepare('select userid,name,firstname,username,mail,rights
                                      from user');
        $select->execute();
        $users=[];
        while ($data = $select->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User();
            $user->hydrate($data);
            $users[] = $user;
        }
        return $users;
    }

    public function deleteUser($userId)
    {
        $dataBase = $this->dbConnect();
        $delete = $dataBase->prepare('delete from user where userId = ?');
        $delete->execute(array($userId));
    }

    public function userDetails($userId)
    {
        $dataBase = $this->dbConnect();
        $select = $dataBase->prepare('select Name,Firstname,username,mail,rights
                                      from user
                                      where userid = ?');
        $select->execute(array($userId));
        $data = $select->fetch(\PDO::FETCH_ASSOC);
        $user = new User();
        $user->hydrate($data);
        return $user;
    }

    public function mail($name, $firstname, $mailContent, $mail)
    {
        $to = 'aurele.sarrail@gmail.com';
        $subject = 'Mail de' . $name . $firstname;
        $message = $mailContent;
        $headers = 'From ' . $mail;

        mail($to, $subject, $message, $headers);
    }
}
