<?php namespace System\Users;

class Admin
{
    public int $id;
    public string $username = '';
    public string $password = '';


    /**
     * @param \PDO $db
     * @return bool
     */

    public function update(\PDO $db): bool
    {
        $query = 'UPDATE admin
                  SET username = :username, password = :password
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':username' => $this->username,
            ':password' => $this->password,
            ':id' => $this->id
        ]);
    }

    public function delete(\PDO $db): bool
    {
        $query = 'DELETE FROM admin
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }


    /**
     * save new admin user
     *
     * @param Admin $admin
     * @param \PDO $db
     * @return bool
     */

    public static function create(Admin $admin, \PDO $db): bool
    {
        $query = 'INSERT INTO admin (username, password)
                  VALUES (:username, :password, :artist, :genre, :year, :tracks, :image)';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':username' => $admin->username,
            ':password' => $admin->password
        ]);
    }


}