<?php

namespace src\DesignPattern\BehavioralPatterns\Iterator;

use Countable as CountableAlias;
use Iterator as IteratorAlias;

class UserList implements CountableAlias, IteratorAlias
{
    private array $users = [];
    private int $courrentIndex = 0;

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->users);
    }

    public function addUser( User $user): void
    {
        $this->users[] = $user;
    }
    public function removeUser(User $user): void
    {
        foreach ($this->users as $key => $currentUser) {
            if ($currentUser->getName() === $user->getName()) {
                unset($this->users[$key]);
            }
        }
        $this->users = array_values($this->users);
    }

    /**
     * @return mixed
     */
    public function current(): mixed
    {
        return $this->users[$this->courrentIndex];
    }

    /**
     * @return void
     */
    public function next(): void
    {
        $this->courrentIndex++;
    }

    /**
     * @return mixed|null
     */
    public function key(): mixed
    {
        return $this->courrentIndex;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->users[$this->courrentIndex]);
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->courrentIndex = 0;
    }
}
