<?php

namespace app\src\DesignPattern\Decorator\UserPresenter;

use app\src\DesignPattern\Decorator\UserPresenter\User;

class UserPresenter
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function fullName(): string
    {
        return $this->user->getName() . ' ' . $this->user->getLastName();
    }

    /**
     * @return string
     */
    public function persianRegisterDate(): string
    {
        return $this->user->getRegistrationDate();
    }
}
