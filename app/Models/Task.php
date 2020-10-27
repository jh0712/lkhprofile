<?php

namespace App\Models;

use App\Http\Traits\TaskTrait;
use App\Http\Traits\TimestampsTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use TimestampsTrait;
    use TaskTrait;
    public function getDates()
    {
        return ['created_at', 'updated_at', 'due_date'];
    }

    //Define the table
    protected $table='tasks';


}
