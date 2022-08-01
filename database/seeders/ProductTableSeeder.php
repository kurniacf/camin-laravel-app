<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Products([
            'imageLink' => 'https://id.360buyimg.com/Indonesia/s880x0_/nHBfsgAAOAAAAAYAEXpBgAADEcY.jpg.dpg.webp',
            'title' => 'Giordano Kemeja Pria',
            'category' => 'Fashion',
            'price' => 629000
        ]);
        $product->save();

        $product = new Products([
            'imageLink' => 'https://img20.jd.id/babel/nHBfsgABNwAAAAwAFCEcOwACekY.jpg.webp',
            'title' => 'Roseband Minyak Goreng 2L',
            'category' => 'Kebutuhan Rumah Tangga',
            'price' => 36000
        ]);
        $product->save();

        $product = new Products([
            'imageLink' => 'https://img20.jd.id/babel/amZzL3QyMi8xMDgvMzAwNzU0NDkxMC8xMzI1MjMvZjY3MzliNTEvNWU1Mzg4NWNOMjAwM2VkMzQ.jpg.webp',
            'title' => 'Indomie Kari Ayam 1 Dus',
            'category' => 'Kebutuhan Rumah Tangga',
            'price' => 120000
        ]);
        $product->save();

        $product = new Products([
            'imageLink' => 'https://img20.jd.id/babel/amZzL3Q3MC81OS8xMTgwNDc1Nzg0Ni82ODQwNy8yYzEwODg2Yi82MTNmMjE5ME5jNzQyNTE5OQ.jpg.webp',
            'title' => 'Nike Air Max 200-White',
            'category' => 'Olahraga & Lifestyle',
            'price' => 900000
        ]);
        $product->save();

        $product = new Products([
            'imageLink' => 'https://img20.jd.id/babel/amZzL3Q4Mi8xNzcvNTMwNTIwNDgwNy8zNDkxNDcvMjU2ZWNkZjQvNjA3ZTUxYzJOOTAzODkyMTQ.jpg.webp',
            'title' => 'Auckey Kabel Charger Type C',
            'category' => 'Elektronik',
            'price' => 50000
        ]);
        $product->save();

        $product = new Products([
            'imageLink' => 'https://img20.jd.id/babel/amZzL3Q4Mi8zNDgvNjUyNTMxOTA3NS8xNTA5NzMvYWZlN2E3NTAvNjBhNGMyYWROZDc1YTcxNTQ.jpg.webp',
            'title' => 'Niko Mini Rice Cooker',
            'category' => 'Elektronik',
            'price' => 200000
        ]);
        $product->save();

        $product = new Products([
            'imageLink' => 'https://img20.jd.id/babel/amZzL3Q5NC8yOTgvMjYzNzMyNDMxLzE3NDcxOS85MWYyZTM5Zi82MTRkNzAwN05kY2MyMWUxMw.jpg.webp',
            'title' => 'Soklin Powder Detergen',
            'category' => 'Kebutuhan Rumah Tangga',
            'price' => 40000
        ]);
        $product->save();

        $product = new Products([
            'imageLink' => 'https://img20.jd.id/babel/amZzL3Q1NS8yLzExOTEwNDA0NDYvODE0MjYvOWM0MWI1OGQvNWYwODBkOTJOMjRjMWVkNDk.jpg.webp',
            'title' => 'Martin Versa Tas Ransel TR14',
            'category' => 'Fashion',
            'price' => 150000
        ]);
        $product->save();

        $product = new Products([
            'imageLink' => 'https://img20.jd.id/babel/amZzL3Q3My80Mi80MDE1MDE1ODI5LzM2NDc2My9mMTNhNzVlMi82MDRmMmEyNE5mYTFkZGM0OA.png',
            'title' => 'SGM Eksplor Aktif 1+ Vanilla',
            'category' => 'Kebutuhan Bayi',
            'price' => 86000
        ]);
        $product->save();

    }
}
