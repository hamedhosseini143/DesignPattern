<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\AccountRegistry;

use App\Models\User;

abstract class AccountCreator
{
    public function registerAccount(User $user, int $balance): \App\Models\Account
    {
        $account = $this->getAccount();
        if ($balance < $account->minimumBalanceDefinition()) {
            throw new \Exception('Balance cannot be negative');
        }

        $account =  new \App\Models\Account([
            'interest_rate' => $account->intrestRate(),
        ]);
        $account->save();
        return $account;
    }
    abstract protected function getAccount(): Account;
}
