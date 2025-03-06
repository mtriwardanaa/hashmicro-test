<?php

namespace Modules\User\Http\Services;

use Modules\User\Http\Repository\UserRepository;

class UserService
{
    public function __construct(
        protected UserRepository $userRepository,
    ) {
    }

    public function index()
    {
        return $this->userRepository->get()->toArray();
    }

    public function show(int $id)
    {
        return $this->userRepository->findOrFail($id);
    }
}
