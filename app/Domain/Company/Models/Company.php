<?php

namespace Xploro\Domain\Company\Models;

use Illuminate\Database\Eloquent\Model;
use Xploro\App\Tenant\Traits\IsTenant;
use Xploro\Domain\Project\Models\Project;

class Company extends Model
{
    use IsTenant;

    protected $fillable = [
        'name',
        'country',
        'email',
        'phone'
    ];

    /**
     * Get projects owned by company.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
