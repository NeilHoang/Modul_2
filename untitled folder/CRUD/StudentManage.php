<?php

class StudentManage
{
    private $path;
    
    function __construct($path)
    {
        $this->path = $path;
    }
    
    public function getPath()
    {
        return $this->path;
    }
    
    public function setPath($path)
    {
        $this->path = $path;
    }
    
    function readFileJson()
    {
        $listStudent = file_get_contents($this->path);
        return json_decode($listStudent, true);
    }
    
    function addStudent($student)
    {
        $arrayListStudent = $this->readFileJson();
        $students = [
            "name" => $student->getName(),
            "phone" => $student->getPhone(),
            "address" => $student->getAddress(),
            "class" => $student->getClass(),
            "role" => $student->getRole()
        ];
        array_push($arrayListStudent,$students);
        $this->saveFileToJson($arrayListStudent);
    }
    
    function saveFileToJson($data)
    {
    $newData = json_encode($data);
    return file_put_contents($this->path,$newData);
    }
}

$path = "data.json";
$manager = new StudentManage($path);
