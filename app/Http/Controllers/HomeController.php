<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $categoriesResponse = Http::get(config('services.nahel.categories_url'));
        $categories = collect($categoriesResponse->json());

        $newProductsResponse = Http::get(config('services.nahel.products_catalog_url'));
        $newProducts = collect($newProductsResponse->json())
            ->where('ESNUEVO', 'NUEVO')
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
            'newProducts' => $newProducts,
            'bannerSlides' => $bannerSlides
        ]);
    }

    public function weAre()
    {
        return view('app.we-are');
    }

    public function contactUsForm()
    {
        return view('app.contact-us');
    }

    public function contactUsSend(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to('orgonlan2@gmail.com')
            ->send(new ContactUsMailable($request->all()));

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Mensaje enviado!',
            'text' => 'Nos pondremos en contacto contigo'
        ]);

        return redirect()->route('app.contact-us');
    }

    public function distributors()
    {
        return view('app.distributors');
    }

    public function product(string $productCode)
    {
        $productResponse = Http::get(config('services.nahel.products_catalog_url') . "/" . $productCode);
        $relatedProductsResponse = Http::get(config('services.nahel.products_similar_url') . $productCode);
        $categoriesResponse = Http::get(config('services.nahel.categories_url'));
        $products = $productResponse->json();
        $relatedProducts = $relatedProductsResponse->json();
        $productImages = [];
        foreach ($products as $product) {
            $productImages[] = $product['IMG'];
        }

        $product = $products[0];

        $categories = collect($categoriesResponse->json())
            ->all();

        return view('app.product', compact('product', 'productImages', 'categories', 'relatedProducts'));
    }

    public function category(Request $request, string $categoryCode)
    {
        $productsResponse = Http::get(config('services.nahel.products_catalog_url'));
        $categoryResponse = Http::get(config('services.nahel.categories_url'));

        $category = collect($categoryResponse->json())
            ->where('CATEGORIA', $categoryCode);

        $products = collect($productsResponse->json())
            ->where('CATEGORIA', $categoryCode);

        $rides = collect();
        $colors = collect();
        $genders = collect();

        if ($categoryCode === 'BICI') {
            $bicycleResponse = Http::get(config('services.nahel.bicycles_url'));
            $bicycles = collect($bicycleResponse->json());

            $rides = $bicycles->pluck('RODADA')->unique()->filter()->sort()->values();
            $colors = $bicycles->pluck('COLOR')->unique()->filter()->sort()->values();
            $genders = $bicycles->pluck('GENERO')->unique()->filter()->sort()->values();

            $products = $bicycles
                ->filter(function ($item) use ($request) {
                    if (!$request->filled('ride')) return true;
                    return $item['RODADA'] == $request->input('ride');
                })
                ->filter(function ($item) use ($request) {
                    if (!$request->filled('gender')) return true;
                    return $item['GENERO'] == $request->input('gender');
                })
                ->filter(function ($item) use ($request) {
                    if (!$request->filled('color')) return true;
                    return trim(strtolower($item['COLOR'])) == strtolower($request->input('color'));
                })
                ->filter(function ($item) use ($request) {
                    if (!$request->has('isNew')) return true;
                    return !empty(trim($item['ESNUEVO']));
                });
        }

        $products = $products->paginate(20)->withQueryString();

        return view('app.category', [
            'products' => $products,
            'categoryName' => $category->first()['DESCRIPCION'],
            'categoryCode' => $categoryCode,
            'rides' => $rides,
            'colors' => $colors,
            'genders' => $genders
        ]);
    }

    public function search(Request $request)
    {
        $search = strtolower($request->input('searchField'));

        $productsResponse = Http::get(config('services.nahel.products_catalog_url'));

        $searchResults = collect($productsResponse->json())->filter(function ($item) use ($search) {
            return str_contains(strtolower($item['CODIGO']), $search)
                || str_contains(strtolower($item['FICHA']), $search)
                || str_contains(strtolower($item['DESCRIPCION']), $search);
        })->sortBy(function ($item) use ($search) {
            if (str_contains(strtolower($item['DESCRIPCION']), $search)) {
                $priority = 1;
            } elseif (str_contains(strtolower($item['CODIGO']), $search)) {
                $priority = 2;
            } else {
                $priority = 3;
            }
            return [
                $priority,
                $item['DESCRIPCION']
            ];
        })->paginate(20)
            ->withQueryString();

        return view('app.search-results', [
            'products' => $searchResults,
            'userSearch' => $request->input('searchField')
        ]);
    }
}
