<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Percentage\Http\Repository\PercentageRepository;
use Modules\User\Http\Repository\UserRepository;

class DashboardController extends Controller
{
    public function __construct(
        protected UserRepository $userRepository,
        protected PercentageRepository $percentageRepository,
    ) {
    }

    public function index(Request $request)
    {
        $totalUser = $this->userRepository->count();
        $totalCheck = $this->percentageRepository->count();

        $data = [
            'total_user'  => $totalUser,
            'total_check' => $totalCheck,
        ];

        return view('dashboard', compact('data'));
    }
}
