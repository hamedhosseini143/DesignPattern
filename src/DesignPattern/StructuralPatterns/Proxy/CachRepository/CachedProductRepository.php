<?php

namespace src\DesignPattern\StructuralPatterns\Proxy\CachRepository;



class CachedProductRepository implements ProductRepositoryInterface
{
    private ProductRepositoryInterface $productRepository;
    private Repository $cache;

    public function __construct(ProductRepositoryInterface $productRepository, Repository $cache)
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
