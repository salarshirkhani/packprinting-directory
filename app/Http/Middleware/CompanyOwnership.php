<?php

namespace App\Http\Middleware;

use App\Product;
use Closure;
use Illuminate\Http\Request;

class CompanyOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var Product $product */
        $product = $request->route()->parameter('product');
        if ($product != null && !$product->company->creator->is(\Auth::user()))
            return abort(403);

        return $next($request);
    }
}
