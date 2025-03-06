<?php

namespace Modules\Percentage\Http\Services;

class PercentageMessageGenerator extends PercentageCounter
{
    public function calculatePercentageWithMessages($input1, $input2)
    {
        $percentage = $this->calculatePercentage($input1, $input2);

        return [
            'input1'     => $input1,
            'input2'     => $input2,
            'result'     => $percentage,
            'message'    => $this->generateMessage($percentage),
            'created_by' => $this->createdBy(),
        ];
    }

    protected function generateMessage($percentage)
    {
        return match (true) {
            $percentage == 100 => "Semua karakter cocok!",
            $percentage >= 50 => "Lebih dari setengah karakter cocok!",
            $percentage > 0 => "Beberapa karakter cocok.",
            default => "Tidak ada karakter yang cocok.",
        };
    }

    protected function createdBy()
    {
        return auth()->id();
    }
}
