<?php
namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Model;

class Task extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['project_id', 'title', 'description', 'status', 'priority', 'due_date'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
