<?php

namespace src\DesignPattern\StructuralPatterns\Flyweight\DiscountGenerator;

class DiscountFactory
{
    /**
     * @var array
     */
    private array $constraints = [];
    /**
     * @var array
     */
    private array $discounts = [];

    /**
     * @param string $code
     * @param int $userId
     * @param int $expiryDate
     * @param int $limit
     * @param int $minAmount
     * @param int $maxAmount
     * @param float $percent
     * @return Discount
     */
    public function createDiscount(string $code, int $userId, int $expiryDate, int $limit, int $minAmount, int $maxAmount, float $percent): Discount
    {
        $constraints = $this->createConstraints($expiryDate, $limit, $minAmount, $maxAmount, $percent);
        $discount = new Discount($code, $userId, $constraints);
        $this->discounts[] = $discount;
        return $discount;
    }

    /**
     * @param int $expiryDate
     * @param int $limit
     * @param int $minAmount
     * @param int $maxAmount
     * @param float $percent
     * @return DiscountConstraints
     */
    private function createConstraints(int $expiryDate, int $limit, int $minAmount, int $maxAmount, float $percent): DiscountConstraints
    {
        $key = $this->createKey(get_defined_vars());
        if (!isset($this->constraints[$key])) {
            $this->constraints[$key] = new DiscountConstraints($expiryDate, $limit, $minAmount, $maxAmount, $percent);
        }
        return $this->constraints[$key];
    }

    /**
     * @param array $data
     * @return string
     */
    private function createKey(array $data): string
    {
        ksort($data);
        return md5(implode('_', $data));
    }

    /**
     * @return array
     */
    public function getDiscountList(): array
    {
        return $this->discounts;
    }

}