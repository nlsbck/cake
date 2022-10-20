<?php

namespace App\Controller;

use Cake\Http\Response;

class IndexController extends AppController
{

    public function hello(): Response
    {
        return new Response(["body" => "Hello World!"]);
    }
}
