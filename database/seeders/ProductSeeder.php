<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['sku' => 'SKU-RED-001', 'name' => 'Camisa Vermelha', 'price_cents' => 9900, 'currency' => 'BRL', 'stock' => 120],
            ['sku' => 'SKU-BLK-002', 'name' => 'Camisa Preta', 'price_cents' => 10500, 'currency' => 'BRL', 'stock' => 80],
            ['sku' => 'SKU-BLU-003', 'name' => 'Camisa Azul', 'price_cents' => 9700, 'currency' => 'BRL', 'stock' => 150],
            ['sku' => 'SKU-GRN-004', 'name' => 'Camisa Verde', 'price_cents' => 9800, 'currency' => 'BRL', 'stock' => 90],
            ['sku' => 'SKU-WHT-005', 'name' => 'Camisa Branca', 'price_cents' => 9500, 'currency' => 'BRL', 'stock' => 200],
            ['sku' => 'SKU-YLW-006', 'name' => 'Camisa Amarela', 'price_cents' => 9900, 'currency' => 'BRL', 'stock' => 60],
            ['sku' => 'SKU-PNK-007', 'name' => 'Camisa Rosa', 'price_cents' => 10200, 'currency' => 'BRL', 'stock' => 75],
            ['sku' => 'SKU-ORG-008', 'name' => 'Camisa Laranja', 'price_cents' => 9700, 'currency' => 'BRL', 'stock' => 65],
            ['sku' => 'SKU-PRP-009', 'name' => 'Camisa Roxa', 'price_cents' => 10300, 'currency' => 'BRL', 'stock' => 110],
            ['sku' => 'SKU-GRY-010', 'name' => 'Camisa Cinza', 'price_cents' => 9400, 'currency' => 'BRL', 'stock' => 140],
            ['sku' => 'SKU-HAT-011', 'name' => 'Boné Preto', 'price_cents' => 5500, 'currency' => 'BRL', 'stock' => 200],
            ['sku' => 'SKU-HAT-012', 'name' => 'Boné Branco', 'price_cents' => 5400, 'currency' => 'BRL', 'stock' => 180],
            ['sku' => 'SKU-HAT-013', 'name' => 'Boné Vermelho', 'price_cents' => 5600, 'currency' => 'BRL', 'stock' => 170],
            ['sku' => 'SKU-HAT-014', 'name' => 'Boné Azul', 'price_cents' => 5700, 'currency' => 'BRL', 'stock' => 190],
            ['sku' => 'SKU-HAT-015', 'name' => 'Boné Verde', 'price_cents' => 5500, 'currency' => 'BRL', 'stock' => 160],
            ['sku' => 'SKU-SHOE-016', 'name' => 'Tênis Preto', 'price_cents' => 19900, 'currency' => 'BRL', 'stock' => 50],
            ['sku' => 'SKU-SHOE-017', 'name' => 'Tênis Branco', 'price_cents' => 19800, 'currency' => 'BRL', 'stock' => 40],
            ['sku' => 'SKU-SHOE-018', 'name' => 'Tênis Azul', 'price_cents' => 20000, 'currency' => 'BRL', 'stock' => 30],
            ['sku' => 'SKU-SHOE-019', 'name' => 'Tênis Vermelho', 'price_cents' => 20100, 'currency' => 'BRL', 'stock' => 25],
            ['sku' => 'SKU-SHOE-020', 'name' => 'Tênis Verde', 'price_cents' => 20200, 'currency' => 'BRL', 'stock' => 20],
        ];

        foreach ($products as $data) {
            Product::updateOrCreate(['sku' => $data['sku']], $data);
        }
    }
}
