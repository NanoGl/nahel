<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home()
    {
        $categoriesResponse = Http::get(config('services.nahel.categories_url'));
        //$products = $response->json();
        //$products = collect($response->json())->take(20)->all();
        $categories = collect($categoriesResponse->json());

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

    public function weAre()
    {
        return view('app.we-are');
    }

    public function distributors()
    {
        return view('app.distributors');
    }

    public function product(string $productCode)
    {
        $productResponse = Http::get(config('services.nahel.products_catalog_url') . "/" . $productCode);
        $relatedProductsResponse = Http::get(config('services.nahel.products_similar_url') . $productCode);
        $categoriesResponse = Http::get(config('services.nahel.products_catalog_url'));
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

    public function category(string $categoryName)
    {
        $productsResponse = Http::get(config('services.nahel.products_catalog_url'));
        $products = collect($productsResponse->json())
            ->where('CATEGORIA', $categoryName)
            ->paginate(40);

        $categoryResponse = Http::get(config('services.nahel.categories_url'));
        $category = collect($categoryResponse->json())
            ->where('CATEGORIA', $categoryName);

        return view('app.category', [
            'products' => $products,
            'categoryName' => $category->first()['DESCRIPCION']
        ]);
    }
}
