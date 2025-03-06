<?php

namespace Modules\Percentage\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Modules\User\Models\User;

/**
 * Class Percentage
 *
 * @property string $id
 * @property string $input1
 * @property string $input2
 * @property string $result
 * @property string $message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package Modules\Percentage\Models
 */

class Percentage extends Model
{

    protected $table = 'percentages';

    protected $fillable = [
        'input1',
        'input2',
        'result',
        'message',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime:Y-m-d H:i:s',
            'updated_at' => 'datetime:Y-m-d H:i:s',
        ];
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
