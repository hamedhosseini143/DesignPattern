<?php

namespace src\DesignPattern\StructuralPatterns\Flyweight\FakeData;


class UserFactory
{
    /**
     * @var array
     */
    private array $users = [];
    /**
     * @var array
     */
    private array $USerProfiles = [];

    /**
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     * @param string $city
     * @param string $gender
     * @return User
     */
    public function createUser(string $firstName, string $lastName, int $age, string $city, string $gender): User
    {
        $profile = $this->createUserProfile($age, $city, $gender);
        $user = new User($firstName, $lastName, $profile);
        $this->users[] = $user;
        return $user;
    }

    /**
     * @param int $age
     * @param string $city
     * @param string $gender
     * @return mixed|UserProfile
     */
    private function createUserProfile(int $age, string $city, string $gender)
    {
        $key = $age . $city . $gender;
        if (!isset($this->USerProfiles[$key])) {
            $this->USerProfiles[$key] = new UserProfile($age, $city, $gender);
        }
        return $this->USerProfiles[$key];
    }

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->users;
    }
}