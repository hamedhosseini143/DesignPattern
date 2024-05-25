<?php

namespace src\DesignPattern\Creational\AbstractFactory\FormBuilder;

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Bootstrap\BootstrapFormUiFactory;
use src\DesignPattern\Creational\AbstractFactory\FormBuilder\UiFramework\Tailwind\TailwindFormFactory;

class FormBuilderClient
{
    /**
     * @return void
     */
    public function buildBootstrapForm(): void
    {
        $bootstrapFormUiFactory = new BootstrapFormUiFactory();
        $textInput = $bootstrapFormUiFactory->createTextInput()->render();
        $radio = $bootstrapFormUiFactory->createRadio()->render();
        $textArea = $bootstrapFormUiFactory->createTextArea()->render();
        echo $textInput;
        echo $radio;
        echo $textArea;
    }

    /**
     * @return void
     */
    public function buildTailwindForm(): void
    {
        $tailwindFormFactory = new TailwindFormFactory();
        $textInput = $tailwindFormFactory->createTextInput()->render();
        $radio = $tailwindFormFactory->createRadio()->render();
        $textArea = $tailwindFormFactory->createTextArea()->render();
        echo $textInput;
        echo $radio;
        echo $textArea;
    }
}
