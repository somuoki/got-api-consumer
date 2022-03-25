<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function jsonResults($response)
    {
        // return $response->getBody();
        return $response->getStatusCode() == 200 ? json_decode($response->getBody(), true) : throw new \Exception('Server error');
    }

    public function fetchData($category, $query = null){
        $client = new Client([
            // Base URI is used with relative requests
            "base_uri" => "https://topup-ice.herokuapp.com/books",
            
            // You can set any number of default request options.
            "timeout"  => 50.0,
            'retry' => 4,
        ]);
        return Cache::remember($category,600, function () use ($query, $client) {
            return $this->jsonResults($client->request("GET",'', [
                'query' => $query
            ]));
        });
    }

    public function sendData($category, $query = null){
        $client = new Client([
            // Base URI is used with relative requests
//            "base_uri" => "https://topup-ice.herokuapp.com/books",
            'base_uri' => 'http://localhost:8000/'.$category,
            // You can set any number of default request options.
            "timeout"  => 50.0,
            'retry' => 4,
        ]);
        return Cache::remember($category,600, function () use ($query, $client) {
            return $this->jsonResults($client->request("POST",'', [
                'json' => $query
            ]));
        });
    }
}
