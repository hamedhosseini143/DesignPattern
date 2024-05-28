<?php

namespace src\DesignPattern\StructuralPatterns \Proxy\CachRepository;

use Illuminate\Cache\Repository;

class CachedProductRepository implements ProductRepositoryInterface
{
    private \src\DesignPattern\StructuralPatterns \Proxy\CachRepository\ProductRepositoryInterface $productRepository;
    private Repository $cache;

    /**
     * @param \src\DesignPattern\StructuralPatterns \Proxy\CachRepository\ProductRepositoryInterface $productRepository
     * @param Repository $cache
     */
    public function __construct(\src\DesignPattern\StructuralPatterns \Proxy\CachRepository\ProductRepositoryInterface $productRepository, Repository $cache)
    {
        $this->productRepository = $productRepository;
        $this->cache = $cache;
    }
    /**
     * @return mixed
     */
    public function getAll() : array
    {
        return $this->cache->remember('products', 60, function () {
            return $this->productRepository->getAll();
        });
    }
}
