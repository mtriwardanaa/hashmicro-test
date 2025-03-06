<?php

namespace Modules\Percentage\Http\Services;

use Modules\Percentage\Http\Repository\PercentageRepository;

class PercentageService
{
    public function __construct(
        protected PercentageRepository $percentageRepository,
        protected PercentageMessageGenerator $percentageMessageGenerator,
    ) {
    }

    public function index()
    {
        return $this->percentageRepository
            ->with('creator')
            ->orderByDesc('id')->get()->toArray();
    }

    public function create(array $post)
    {
        $check = $this->percentageMessageGenerator->calculatePercentageWithMessages($post['input1'], $post['input2']);

        return $this->percentageRepository->create($check);
    }

    public function show(string $id)
    {
        return $this->percentageRepository->findOrFail($id);
    }

    public function update(array $post, $id)
    {
        $check = $this->percentageMessageGenerator->calculatePercentageWithMessages($post['input1'], $post['input2']);

        $percentage = $this->percentageRepository->findOrFail($id);
        $percentage->update($check);

        return $percentage;
    }

    public function destroy(string $id)
    {
        $percentage = $this->percentageRepository->findOrFail($id);
        $percentage->delete();

        return $percentage;
    }
}
