<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait TaskTrait
{


    public $dueDateFormatting = true;

    public function getDueDateAttribute($value)
    {
        if ($this->dueDateFormatting) {
            return Carbon::parse($value)->toFormattedDateString();
        } else {
            return $this->attributes['due_date'] = $value;
        }

    }
}