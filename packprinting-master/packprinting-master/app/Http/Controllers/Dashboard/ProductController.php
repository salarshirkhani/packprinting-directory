<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductStoreRequest;
use App\Http\Requests\Dashboard\ProductUpdateRequest;
use App\Product;
use App\ProductCategory;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Product::class);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.products.create', [
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param ProductStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();

        $product = new Product($data);
        $product->category()->associate($data['category_id']);
        $product->company()->associate(Auth::user()->company); // TODO: This line needs edit if the relation between user and company becomes one to many
        $product->photo = $request->file('photo')->store('products', 'public');
        $product->save();

        return redirect()
            ->route('dashboard.products.show', ['product' => $product])
            ->with('success', __('محصول شما با موفقیت ثبت شد!'));
    }

    /**
     * Display the specified product.
     *
     * @param Product $product
     * @return View
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product,
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Update the specified product in storage.
     *
     * @param ProductUpdateRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        $product->category()->associate($data['category_id']);

        if ($request->hasFile('photo') && $request->file('photo')->isValid())
            $product->photo = $request->file('photo')->store('products', 'public');
        $product->state = 'pending_edit';
        $product->save();

        return redirect()
            ->route('dashboard.products.show', ['product' => $product])
            ->with('success', __('محصول شما با موفقیت ویرایش شد!'));
    }
}
