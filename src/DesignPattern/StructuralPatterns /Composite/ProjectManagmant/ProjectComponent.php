<?php

namespace src\DesignPattern\StructuralPatterns \Composite\ProjectManagmant;

interface ProjectComponent
{
    public function done();
    public function add();
    public function delete();
    public function duplicate();
    public function move();


}
