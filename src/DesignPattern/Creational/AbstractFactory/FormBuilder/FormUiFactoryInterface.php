<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\RadioButtonInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextAreaInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextInputInterface;

interface FormUiFactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface;

    /**
     * @return TextInputInterface
     */
    public function createTextInput(): TextInputInterface;

    /**
     * @return TextAreaInterface
     */
    public function createTextArea(): TextAreaInterface;

    /**
     * @return RadioButtonInterface
     */
    public function createRadio(): RadioButtonInterface;
}
