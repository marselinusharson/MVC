<?php

namespace Marselinus\BelajarMvc\Controller;

class ProductControler
{
    function categories(string $productId,string $categoriesId): void
    {
        echo "PRODUK: $productId, KATEGORY: $categoriesId";
    }
}