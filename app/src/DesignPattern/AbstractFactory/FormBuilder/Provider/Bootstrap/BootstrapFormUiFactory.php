<?php

namespace app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap;


use app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements\BootstrapButton;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements\BootstrapRadoButton;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements\BootstrapTextArea;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Bootstrap\Elements\BootstrapTextInput;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\Button;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextInput;
use app\src\DesignPattern\AbstractFactory\FormBuilder\FormUiFactory;

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
