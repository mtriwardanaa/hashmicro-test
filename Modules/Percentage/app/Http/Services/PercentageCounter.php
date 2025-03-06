<?php

namespace Modules\Percentage\Http\Services;

class PercentageCounter
{
    public function calculatePercentage($input1, $input2)
    {
        $count = 0;
        $chars = [];
        $input1 = strtoupper($input1);
        $input2 = strtoupper($input2);
        foreach (str_split($input1) as $char1) {
            foreach (str_split($input2) as $char2) {
                if ($char1 == $char2) {
                    $chars[] = $char1;
                    $count++;
                    break;
                }
            }
        }

        $totalChars = strlen($input1);

        return ($totalChars > 0) ? round(($count / $totalChars) * 100, 2) : 0;
    }
}
