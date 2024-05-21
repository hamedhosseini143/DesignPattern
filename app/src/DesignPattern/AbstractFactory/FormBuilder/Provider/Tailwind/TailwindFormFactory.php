<?php

namespace app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind;

use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\Button;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\RadioButton;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextArea;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Elements\TextInput;
use app\src\DesignPattern\AbstractFactory\FormBuilder\FormUiFactory;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements\TailwindButton;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements\TailwindRadioButton;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements\TailwindTextArea;
use app\src\DesignPattern\AbstractFactory\FormBuilder\Provider\Tailwind\Elements\TailwindTextInput;

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
