<?php

namespace src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind;

use src\DesignPattern\AbstractFactory\FormBuilder\Elements\Button;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;
use src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextInput;
use src\DesignPattern\AbstractFactory\FormBuilder\FormUiFactory;
use src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements\TailwindButton;
use src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements\TailwindRadioButton;
use src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements\TailwindTextArea;
use src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements\TailwindTextInput;

class TailwindFormFactory implements FormUiFactory
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
