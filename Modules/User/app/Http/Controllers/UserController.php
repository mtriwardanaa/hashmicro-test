<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\Http\Services\UserService;

class UserController extends Controller
{
    public function __construct(
        protected UserService $userService,
    ) {
    }

    public function index()
    {
        $users = $this->userService->index();

        return view('user::index', compact('users'));
    }

    public function show(int $user)
    {
        return $this->userService->show($user);
    }
}
