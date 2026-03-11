<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\View\View;

class DocsController extends Controller
{
    public function index(): View
    {
        return view('api.docs');
    }

    public function spec(): Response
    {
        $yaml = file_get_contents(resource_path('api-docs/openapi.yaml'));

        return response($yaml, 200, [
            'Content-Type' => 'application/yaml',
        ]);
    }
}
