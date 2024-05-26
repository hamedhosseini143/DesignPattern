<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Tailwind;

use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\RadioButtonInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\TextAreaInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\TextInputInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\FormUiFactoryInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements\TailwindButton;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements\TailwindRadioButton;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements\TailwindTextAreaInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Tailwind\Elements\TailwindTextInput;


class TailwindFormFactory implements FormUiFactoryInterface
{

    /**
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface
    {
        return new TailwindButton();
    }

    /**
     * @return TextInputInterface
     */
    public function createTextInput(): TextInputInterface
    {
        return new TailwindTextInput();
    }

    /**
     * @return TextAreaInterface
     */
    public function createTextArea(): TextAreaInterface
    {
        return new TailwindTextAreaInterface();
    }

    /**
     * @return RadioButtonInterface
     */
    public function createRadio(): RadioButtonInterface
    {
        return new TailwindRadioButton();
    }
}
