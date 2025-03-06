<?php

namespace Modules\Percentage\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Percentage\Http\Requests\CreatePercentage;
use Modules\Percentage\Http\Requests\UpdatePercentage;
use Modules\Percentage\Http\Services\PercentageService;

class PercentageController extends Controller
{
    public function __construct(
        protected PercentageService $percentageService,
    ) {
    }
    public function index()
    {
        $percentages = $this->percentageService->index();
        return view('percentage::index', compact('percentages'));
    }

    public function create()
    {
        return view('percentage::create');
    }

    public function store(CreatePercentage $request)
    {
        $post = $request->except('_token');

        $create = $this->percentageService->create($post);

        if ($create) {
            return back()->with([
                'success' => ['Success'],
                'data'    => $create,
            ])->withInput();
        }

        return back()->withErrors([
            'Failed'
        ])->withInput();
    }

    public function show($id)
    {
        $percentage = $this->percentageService->show($id);
        return view('percentage::show', compact('percentage'));
    }

    public function edit($id)
    {
        $percentage = $this->percentageService->show($id);
        return view('percentage::edit', compact('percentage'));
    }

    public function update(UpdatePercentage $request, $id)
    {
        $post = $request->except('_token', '_method');

        $update = $this->percentageService->update($post, $id);

        if ($update) {
            return redirect()->back()->with([
                'success' => ['Success'],
            ])->withInput();
        }

        return back()->withErrors([
            'Failed'
        ])->withInput();
    }

    public function delete($id)
    {
        $delete = $this->percentageService->destroy($id);

        if ($delete) {
            return redirect()->back()->with([
                'success' => ['Success'],
            ]);
        }

        return back()->withErrors([
            'Failed'
        ]);
    }
}
