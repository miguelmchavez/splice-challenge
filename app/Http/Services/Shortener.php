<?php

namespace App\Http\Services;

class Shortener
{
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function short(): string
    {
        $hash = hash('sha256', $this->url);

        // Take the first 8 characters of the hash
        $shortHash = substr($hash, 0, 8);

        // Convert the hash to a base62 string
        $shortUrl = base_convert($shortHash, 16, 2);

        return $shortUrl;
    }
}