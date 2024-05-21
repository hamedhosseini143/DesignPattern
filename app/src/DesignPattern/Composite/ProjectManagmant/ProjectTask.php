<?php

namespace app\src\DesignPattern\Composite\ProjectManagmant;

use app\src\DesignPattern\Composite\ProjectManagmant\ProjectComponent;

class ProjectTask implements ProjectComponent
{
    private $title;
    private $description;
    private $status;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = 'incomplete';
    }

    /**
     * @return mixed
     */
    public function done()
    {
        // TODO: Implement done() method.
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
