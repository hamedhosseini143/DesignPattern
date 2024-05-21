<?php

namespace src\DesignPattern\AbstractFactory\FormBuilder;

use src\DesignPattern\AbstractFactory\FormBuilder\Elements\Button;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextInput;

interface FormUiFactory
{
    public function createButton(): Button;
    public function createTextInput(): TextInput;
    public function createTextArea(): TextArea;
    public function createRadio(): RadioButton;
}
