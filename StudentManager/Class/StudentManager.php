<?php


class StudentManager
{
    protected $connect;
    
    public function __construct()
    {
        $data = new DBConnect("mysql:host=127.0.0.1;dbname=StudentManager", "root", "1037212a");
        $this->connect = $data->connect();
    }
    
    public function getAll()
    {
        $sql = "SELECT * FROM Student";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        $listStudent = [];
        foreach ($result as $value) {
            $student = new Student($value['name'], $value['age']);
            $student->id = $value['id'];
            array_push($listStudent, $student);
        }
        return $listStudent;
    }
    
    public function addStudent($student)
    {
        $stmt = $this->connect->prepare("INSERT INTO Student(name,age) VALUES(:name ,:age)");
        $stmt->bindParam(":name", $student->name);
        $stmt->bindParam(":age", $student->age);
        $stmt->execute();
    }
    
    public function deleteStudent($id)
    {
        $stmt = $this->connect->prepare("DELETE FROM Student WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    
    public function getStudentById($id)
    {
        $stmt = $this->connect->prepare("SELECT name,age FROM Student WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function updateStudent($id,$student)
    {
    $stmt = $this->connect->prepare("UPDATE Student SET name=:name,age=:age WHERE id=:id");
    $stmt->bindParam(":name",$student->name);
    $stmt->bindParam(":age",$student->age);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    }
}