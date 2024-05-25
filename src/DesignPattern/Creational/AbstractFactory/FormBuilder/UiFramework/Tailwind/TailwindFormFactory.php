<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\Button;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextArea;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\Elements\TextInput;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\FormUiFactoryInterface;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements\TailwindButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements\TailwindRadioButton;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements\TailwindTextArea;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements\TailwindTextInput;


class TailwindFormFactory implements FormUiFactoryInterface
{

    /**
     * @return Button
     */
    public function createButton(): Button
    {
        return new TailwindButton();
    }

    /**
     * @return TextInput
     */
    public function createTextInput(): TextInput
    {
        return new TailwindTextInput();
    }

    /**
     * @return TextArea
     */
    public function createTextArea(): TextArea
    {
        return new TailwindTextArea();
    }

    /**
     * @return RadioButton
     */
    public function createRadio(): RadioButton
    {
        return new TailwindRadioButton();
    }
}
