<?php

namespace src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\UiFramework\Bootstrap\Elements;

use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\Elements\TextInputInterface;

class BootstrapTextInput implements TextInputInterface
{

    /**
     * @return string
     */
    public function render(): string
    {
        return "<input type='text' class='form-control'>";
    }
}
