<?php


class StudentDB
{
    protected $connect;
    
    public function __construct()
    {
        $data = new DBConnect("mysql:host=127.0.0.1;dbname=demo_upload_image", "root", "1037212a");
        $this->connect = $data->connect();
    }
    
    public function addStudent($student)
    {
        $stmt = $this->connect->prepare("INSERT INTO students(name,phone,image) VALUES(:name,:phone,:image)");
        $stmt->bindParam(":name", $student->name);
        $stmt->bindParam(":phone",$student->phone);
        $stmt->bindParam(":image", $student->image);
        $stmt->execute();
    }
    
    public function getAll()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetchAll();
        
        $students = [];
        foreach ($result as $item)
        {
           $student = new Student($item['name'],$item['phone'],$item['image']);
           $student->id = $item['id'];
           array_push($students,$student);
        }
        return $students;
    }
    
    public function deleteStudent($id)
    {
        $stmt = $this->connect->prepare("DELETE FROM students WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}