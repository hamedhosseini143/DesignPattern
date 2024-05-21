<?php

namespace src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap;


use src\DesignPattern\AbstractFactory\FormBuilder\Elements\Button;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextInput;
use src\DesignPattern\AbstractFactory\FormBuilder\FormUiFactory;
use src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements\BootstrapButton;
use src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements\BootstrapRadoButton;
use src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements\BootstrapTextArea;
use src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements\BootstrapTextInput;

class BootstrapFormUiFactory implements FormUiFactory
{

    /**
     * @return Button
     */
    public function createButton(): Button
    {
        return  new BootstrapButton();
    }

    /**
     * @return TextInput
     */
    public function createTextInput(): TextInput
    {
        return new BootstrapTextInput();
    }

    /**
     * @return TextArea
     */
    public function createTextArea(): TextArea
    {
        return new BootstrapTextArea();
    }

    /**
     * @return RadioButton
     */
    public function createRadio(): RadioButton
    {
        return new BootstrapRadoButton();
    }
}
