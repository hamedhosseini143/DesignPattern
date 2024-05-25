<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\Button;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextArea;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextInput;

interface FormUiFactoryInterface
{
    /**
     * @return Button
     */
    public function createButton(): Button;

    /**
     * @return TextInput
     */
    public function createTextInput(): TextInput;

    /**
     * @return TextArea
     */
    public function createTextArea(): TextArea;

    /**
     * @return RadioButton
     */
    public function createRadio(): RadioButton;
}
