<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home()
    {
        $categoriesResponse = Http::get(env('NAHEL_PRODUCTS_CATALOG'));
        //$products = $response->json();
        //$products = collect($response->json())->take(20)->all();
        $categories = collect($categoriesResponse->json())
            ->groupBy('CATEGORIA')
            ->keys()
            ->all();

        $bannerSlides = [
            [
                'img' => asset('images/store/prototype/banner-bicicletas.png'),
                'link' => route('app.category', 'BICI')
            ],
            [
                'img' => asset('images/store/prototype/banner.png'),
                'link' => route('app.category', 'MOTO')
            ],
            [
                'img' => asset('images/store/prototype/banner-ref-bicicletas.png'),
                'link' => route('app.category', 'RBIC')
            ],
        ];

        return view('app.home', [
            //'products' => $products,
            'categories' => $categories,
            'bannerSlides' => $bannerSlides
        ]);
    }

    public function product($productCode)
    {
        $productResponse = Http::get(env('NAHEL_PRODUCTS_CATALOG') . "/" . $productCode);
        $relatedProductsResponse = Http::get(env('NAHEL_PRODUCTS_SIMILAR') . $productCode);
        $categoriesResponse = Http::get(env('NAHEL_PRODUCTS_CATALOG'));
        $products = $productResponse->json();
        $relatedProducts = $relatedProductsResponse->json();
        $productImages = [];
        foreach ($products as $product) {
            $productImages[] = $product['IMG'];
        }

        $product = $products[0];

        $categories = collect($categoriesResponse->json())
            ->groupBy('CATEGORIA')
            ->keys()
            ->all();

        return view('app.product', compact('product', 'productImages', 'categories', 'relatedProducts'));
    }

    public function category($categoryName)
    {
        $categoryResponse = Http::get(env('NAHEL_PRODUCTS_CATALOG'));
        $products = collect($categoryResponse->json())
            ->where('CATEGORIA', $categoryName);

        return view('app.category', compact('categoryName', 'products'));
    }
}
