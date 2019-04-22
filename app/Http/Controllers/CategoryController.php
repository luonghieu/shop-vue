<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * List cats
     *
     * @param Request $request Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $cats = Category::all();
            return $this->responseSuccess('', $cats);
        } catch (\Exception $ex) {
            return $this->responseError('Error', []);
        }
    }

    /**
     * Create a cat
     *
     * @param Request $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Show cat
     *
     * @param int $id Id of cat
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update cat
     *
     * @param Request $request request
     * @param int     $id      Id of cat
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Delete cat
     *
     * @param int $id Id of cat
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
