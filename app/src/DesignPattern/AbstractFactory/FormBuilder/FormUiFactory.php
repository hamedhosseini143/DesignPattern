<?php

namespace app\src\DesignPattern\AbstractFactory\FormBuilder;

use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\Button;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextInput;

interface FormUiFactory
{
    public function createButton(): Button;
    public function createTextInput(): TextInput;
    public function createTextArea(): TextArea;
    public function createRadio(): RadioButton;
}
