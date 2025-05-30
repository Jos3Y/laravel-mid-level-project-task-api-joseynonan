<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Model;

class Project extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['name', 'description', 'status'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
