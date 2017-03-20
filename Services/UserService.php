<?php
declare(strict_types=1);
namespace Services;


use Adapter\DatabaseInterface;
use Models\IndexViewData;
use Models\AllUsersViewData;
use Models\EditUserData;
use Models\User;

class UserService implements UserServiceInterface
{
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function register($username, $password,$firstName,$secondName,$thirdName,$age): bool
    {
        $stmt = $this->db->prepare("
                INSERT INTO users 
                SET 
                    name = :username, 
                    password = :pass,
                    first_name= :first_name,
                    second_name= :second_name,
                    third_name = :third_name,
                    age = :age
                    
                
        ");

        $password = password_hash($password, PASSWORD_BCRYPT);
        return $stmt->execute(
            [
                'pass' => $password,
                'username' => $username,
                'first_name' => $firstName,
                'second_name' => $secondName,
                'third_name' => $thirdName,
                'age' => $age

            ]
        );
    }

    public function exists($username): bool
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE name = ?");
        $stmt->execute(
            [
                $username
            ]
        );

        return !!$stmt->fetchRow();
    }



    public function login($username, $password)
    {
        $stmt = $this->db->prepare("
            SELECT id, name, password FROM users
            WHERE name = ? 
        ");

        $stmt->execute(
            [
                $username
            ]
        );

        $user = $stmt->fetchRow();

        if (!$user) {
            throw new \Exception("Username does not exist");
        }
        $passwordHash=$user['password'];

        if (!password_verify($password,$passwordHash)) {
            throw new \Exception("Password mismatch");
        }

        return $user['id'];
    }


    public function getInfo($id): User
    {
        $stmt = $this->db->prepare("
            SELECT id, name
            FROM users
            WHERE id = ?
        ");
        $stmt->execute([$id]);

        return $stmt->fetchObject(User::class);
    }

    /**
     * @return AllUsersViewData[]|\Generator
     */
    public function findAll()
    {
        $query = "
         SELECT
              id,
              name,
              first_name AS firstName,
              second_name AS secondName,
              third_name AS thirdName,
              age 
            FROM
               users
               
          
        ";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        while ($user = $stmt->fetchObject(AllUsersViewData::class)) {
            yield $user;
        }
    }
    /**
     * @return IndexViewData
     */
    public function getIndexViewData()
    {
        $query = "SELECT id, name FROM users";
        $stmt = $this->db->prepare($query);
        $stmt->execute([]);

        $viewData = new IndexViewData();


        return $viewData;
    }
    public function getById($id)
    {
        $sql = "
         SELECT
              
              name,
              first_name AS firstName,
              second_name AS lastName,
              third_name AS thirdName,
              age
              FROM users
              WHERE id = ?
               ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        $user=$stmt->fetchObject(EditUserData::class);
        return $user;
    }

    public function editUser($id,$name,$firstName,$secondName,$thirdName,$age)
    {

        $sql = 'UPDATE users SET name = ?, first_name= ?, second_name =?, third_name = ?, age = ? WHERE id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $name,
            $firstName,
            $secondName,
            $thirdName,
            $age,
            $id
        ]);
    }

    public function deleteUser($id){


            $sql = 'DELETE FROM users WHERE id = ?';
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id]);
        }




}