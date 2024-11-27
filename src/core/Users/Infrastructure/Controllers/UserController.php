<?php

namespace Src\Core\Users\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Src\Core\Users\Application\Services\UserService;

class UserController extends Controller
{
    public function __construct(
        private UserService $userService
    ) {}
}
