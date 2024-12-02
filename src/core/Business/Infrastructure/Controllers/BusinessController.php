<?php

namespace Src\Core\Business\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function __construct() {}

    public function getAllBusiness(Request $request)
    {
        dd($request);
    }
}
