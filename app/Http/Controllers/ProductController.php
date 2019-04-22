<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * List products
     *
     * @param Request $request Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $products = Product::with('category')->get();
            return $this->responseSuccess('', $products);
        } catch (\Exception $ex) {
            return $this->responseError('Error', []);
        }
    }

    /**
     * Create a product
     *
     * @param Request $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Show product
     *
     * @param int $id Id of product
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update product
     *
     * @param Request $request request
     * @param int     $id      Id of product
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Delete product
     *
     * @param int $id Id of product
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
