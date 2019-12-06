<?php


class EmployeeManager
{
    protected $path;
    
    public function __construct($path)
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
    
    function addPersonnel($personnel)
    {
        $arrayListPersonnel = $this->readFileJson();
        $personnel = [
            "they" => $personnel->getThey(),
            "name" => $personnel->getname(),
            "birthday" => $personnel->getBirthday(),
            "address" => $personnel->getAddress(),
            "job" => $personnel->getJob()
        ];
        array_push($arrayListPersonnel, $personnel);
        $this->saveFileToJson($arrayListPersonnel);
    }
    
    function saveFIleToJson($data)
    {
        $newData = json_encode($data);
        return file_put_contents($this->path,$newData);
    }
}
$path = "../data.json";
$manager = new EmployeeManager($path);