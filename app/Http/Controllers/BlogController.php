<?php

namespace App\Http\Controllers;

use App\Http\Contracts\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $article;

    public function __construct(Blog $article)
    {
        $this->article = $article;
    }

    public function getAllArticles()
    {
        $articles = $this->article->all();

        return view('article.all',compact('articles'));
    }

    public function getArticleById($id)
    {
        $article = $this->article->get($id)->data;

        //dd($article);
        return view('article.show',compact('article'));
    }
}
