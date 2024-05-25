<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap;


use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\Button;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextArea;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextInput;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\FormUiFactoryInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements\BootstrapButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements\BootstrapRadoButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements\BootstrapTextArea;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements\BootstrapTextInput;

class BootstrapFormUiFactory implements FormUiFactoryInterface
{

    /**
     * @return Button
     */
    public function createButton(): Button
    {
        return new BootstrapButton();
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
