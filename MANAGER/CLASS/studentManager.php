<?php


class studentManager
{
    protected $connect;
    
    public function __construct()
    {
        $data = new DBConnect("mysql:host=127.0.0.1;dbname=sinhvien", "root", "1037212a");
        $this->connect = $data->connect();
    }
    
    public function getAllStudent()
    {
        $sql = "SELECT * FROM c0819h2";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $listStudent = [];
        foreach ($result as $value) {
            $student = new student($value['name'], $value['phone']);
            $student->id = $value['id'];
            array_push($listStudent, $student);
        }
        return $listStudent;
    }
    
    public function addStudent($student)
    {
        $stmt = $this->connect->prepare("INSERT INTO c0819h2(name,phone) VALUES(:name,:phone)");
        $stmt->bindParam(":name", $student->name);
        $stmt->bindParam(":phone", $student->phone);
        $stmt->execute();
    }
    
    public function deleteStudent($id)
    {
        $stmt = $this->connect->prepare("DELETE FROM c0819h2 WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    
    public function findEdit($id)
    {
        $stmt = $this->connect->prepare("SELECT name,phone FROM c0819h2 WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function updateStudent($id,$student)
    {
        $stmt = $this->connect->prepare("UPDATE Student SET name=:name,phone=:phone WHERE id=:id");
        $stmt->bindParam(":name",$student->name);
        $stmt->bindParam(":phone",$student->phone);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }
}