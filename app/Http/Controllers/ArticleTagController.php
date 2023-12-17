<?php

namespace App\Http\Controllers;

use App\Models\ArticleTag;
use App\Http\Requests\StoreArticleTagRequest;
use App\Http\Requests\UpdateArticleTagRequest;

class ArticleTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleTagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleTag  $articleTag
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleTag $articleTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleTag  $articleTag
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleTag $articleTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleTagRequest  $request
     * @param  \App\Models\ArticleTag  $articleTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleTagRequest $request, ArticleTag $articleTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleTag  $articleTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleTag $articleTag)
    {
        //
    }
}
