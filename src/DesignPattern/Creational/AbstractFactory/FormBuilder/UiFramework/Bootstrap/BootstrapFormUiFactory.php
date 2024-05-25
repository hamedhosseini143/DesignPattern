<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap;


use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\RadioButtonInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextAreaInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextInputInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\FormUiFactoryInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements\BootstrapButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements\BootstrapRadoButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements\BootstrapTextArea;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements\BootstrapTextInput;

class BootstrapFormUiFactory implements FormUiFactoryInterface
{

    /**
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface
    {
        return new BootstrapButton();
    }

    /**
     * @return TextInputInterface
     */
    public function createTextInput(): TextInputInterface
    {
        return new BootstrapTextInput();
    }

    /**
     * @return TextAreaInterface
     */
    public function createTextArea(): TextAreaInterface
    {
        return new BootstrapTextArea();
    }

    /**
     * @return RadioButtonInterface
     */
    public function createRadio(): RadioButtonInterface
    {
        return new BootstrapRadoButton();
    }
}
