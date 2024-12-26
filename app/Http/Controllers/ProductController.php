<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; //ใช้ของ inertia
use Inertia\Response;


class ProductController extends Controller
{

    private $products = [['id' => 1, 'name' => 'Essentials Hoodie Black',
            'description' => 'Essentials Hoodie Black',
            'price' => 7000,
            'imageSRC'=> 'https://essentialhoodies.com/wp-content/uploads/2022/02/ESSENTIALS-Hoodie-Men-Women-oversize-Best-quality-essentials-Sweatshirts-kanye-west-hip-hop-streetwear-cotton-ESSENTIAL.jpg_640x640.webp'],
        ['id' => 2, 'name' => 'Essentials Hoodie Light Oatmeal',
            'description' => 'Essentials Hoodie Light Oatmeal',
            'price' => 9000,
            'imageSRC' => 'https://image.goxip.com/Jophy4Hha_8s-s0aCz5GEvpGJyA=/fit-in/500x500/filters:format(jpg):quality(80):fill(white)/https:%2F%2Fimages.stockx.com%2Fimages%2FFear-of-God-Essentials-Hoodie-FW22-Light-Oatmeal.jpg'],
        ['id' => 3, 'name' => 'Essentials Hoodie Dark Oatmeal',
            'description' => 'Essentials Hoodie Dark Oatmeal',
            'price' => 5990,
            'imageSRC' => 'https://genesis17.com/cdn/shop/files/Fear_Of_God_Essentials_Hoodie_Dark_Oatmeal_SS22_48dc5231-28c9-4f82-8886-f8996aa696e6_1080x.png?v=1721156652'],
        ['id' => 4, 'name' => 'Essential Hoodie Gray',
            'description' => 'Essential Hoodie Gray ',
            'price' => 2380,
            'imageSRC' => 'https://www.paragonjackets.com/wp-content/uploads/2023/04/Essentials-Gray-Pullover-Hoodie.jpg'],
        ['id' => 5, 'name' => 'Essential Hoodie Brown',
            'description' => 'Essential Hoodie Brown',
            'price' => 3000,
            'imageSRC' => 'https://cdn-images.farfetch-contents.com/27/49/82/78/27498278_57262612_1000.jpg'],
        ['id' => 6, 'name' => 'Essential Hoodie White',
            'description' => 'Essential Hoodie White',
            'price' => 2900,
            'imageSRC' => 'https://i.ebayimg.com/images/g/ZzsAAOSw4KBnI1zn/s-l1600.webp'],
        ['id' => 7, 'name' => 'BASIC STÜSSY HOODIE BLACK',
            'description' => 'BASIC STÜSSY HOODIE BLACK',
            'price' => 3100,
            'imageSRC' => 'https://stusssyclothes.shop/wp-content/uploads/2024/10/BASIC-STUSSY-HOODIE-BLACK-400x400.jpg'],
        ['id' => 8, 'name' => 'DICED OUT HOODIE White',
            'description' => 'DICED OUT HOODIE White',
            'price' => 3100,
            'imageSRC' => 'https://stusssyclothes.shop/wp-content/uploads/2024/10/DICED-OUT-HOODIE-white.jpg'],
        ['id' => 9, 'name' => 'Logo Velvet Relaxed Fit Ls Polo Shirt',
            'description' => 'Logo Velvet Relaxed Fit Ls Polo Shirt',
            'price' => 8300,
            'imageSRC' => 'https://int.bape.com/cdn/shop/files/0ZXPOM111302NBKX-pdp-1.jpg?v=1732867530&width=1200'],
        ['id' => 10, 'name' => 'A Rising BAPE Military Shark Full Zip Hoodie',
            'description' => 'A Rising BAPE Military Shark Full Zip Hoodie',
            'price' => 26000,
            'imageSRC' => 'https://int.bape.com/cdn/shop/files/0ZXSWMX15003NBKX-pdp-1.jpg?v=1733470702&width=1200'],
        ];


    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
        //ส่งข้อมูลรายการสินค้า $this->products ไปในรูปแบบ key-value pair
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
