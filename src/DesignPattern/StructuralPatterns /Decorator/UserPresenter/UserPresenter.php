<?php

namespace src\DesignPattern\StructuralPatterns \Decorator\UserPresenter;

class UserPresenter
{
    private User $user;

    public function __construct(\src\DesignPattern\StructuralPatterns \Decorator\UserPresenter\User $user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function fullName(): string
    {
        return $this->user->getName() . ' UserPresenter.php' . $this->user->getLastName();
    }

    /**
     * @return string
     */
    public function persianRegisterDate(): string
    {
        return $this->user->getRegistrationDate();
    }
}
