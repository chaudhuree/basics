<?php

require_once './php again starting on 20 may/reference codes/12_oop/Person.php';

class Student extends Person
{
    public int $stId;
    public function __construct($name, $age, $stId)
    {
        $this->stId = $stId;
        parent::__construct($name, $age, null);
    }
}
