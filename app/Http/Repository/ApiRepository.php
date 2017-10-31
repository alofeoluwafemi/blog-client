<?php

namespace App\Http\Repository;

use App\Http\Contracts\Blog;
use GuzzleHttp\Client;
use function GuzzleHttp\Psr7\parse_query;

class ApiRepository implements Blog
{
    public $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('API_URL'),
            'timeout'  => 2.0,
        ]);
    }

    public function all()
    {
        $page = request()->only('page') ?: ['page' => 1];

        $articles = $this->client->request('GET','api/v1/articles',['query' => $page]);

        return json_decode($articles->getBody()->getContents());
    }

    public function get($articleId)
    {
        $article = $this->client->request('GET',"api/v1/article/{$articleId}");

        return json_decode($article->getBody()->getContents());
    }

    public function edit($articleId)
    {
        // TODO: Implement edit() method.
    }

    public function delete($articleId)
    {
        // TODO: Implement delete() method.
    }

    public function comment($articleId)
    {
        // TODO: Implement comment() method.
    }
}