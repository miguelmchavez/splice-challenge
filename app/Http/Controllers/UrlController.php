<?php

namespace App\Http\Controllers;

use App\{Url, Short};
use App\Http\Services\Shortener;
use App\Http\Requests\UrlRequest;
use App\Http\Resources\ShortResource;

class UrlController extends Controller
{
    public function store(UrlRequest $request)
    {
        $data = $request->validated();
        $url = Url::create($data);
        $short = $url->short()->create(['short' => $this->getShortUrl($data['url'])]);

        return new ShortResource($short);
    }

    protected function getShortUrl(string $url): string
    {
        $service = new Shortener($url);
        return $service->short();
    }
}
