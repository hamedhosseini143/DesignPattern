<?php

namespace src\DesignPattern\StructuralPatterns \Composite\ProjectManagmant;

class ProjectGroupTasks implements ProjectComponent
{
    private $tasks ;

    /**
     * @return mixed
     */
    public function done(ProjectTask $projectTask)
    {
        $this->tasks[] = $projectTask;
    }

    /**
     * @return mixed
     */
    public function add()
    {
        // TODO: Implement add() method.
    }

    /**
     * @return mixed
     */
    public function delete()
    {
        // TODO: Implement delete() method.
    }

    /**
     * @return mixed
     */
    public function duplicate()
    {
        // TODO: Implement duplicate() method.
    }

    /**
     * @return mixed
     */
    public function move()
    {
        // TODO: Implement move() method.
    }
}
