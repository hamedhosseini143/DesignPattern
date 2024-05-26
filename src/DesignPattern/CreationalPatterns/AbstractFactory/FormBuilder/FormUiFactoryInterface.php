<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder;

use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\RadioButtonInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\TextAreaInterface;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\TextInputInterface;

interface FormUiFactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function createButton(): ButtonInterface;

    /**
     * @return TextInputInterface
     */
    public function createTextInput(): TextInputInterface;

    /**
     * @return TextAreaInterface
     */
    public function createTextArea(): TextAreaInterface;

    /**
     * @return RadioButtonInterface
     */
    public function createRadio(): RadioButtonInterface;
}
