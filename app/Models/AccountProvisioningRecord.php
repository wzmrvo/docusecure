<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountProvisioningRecord extends Model
{
    protected $fillable = [
        'application_id',
        'user_id',
        'reviewer_id',
        'role',
        'clearance_tier',
        'department_id',
        'status',
        'provisioned_at',
    ];

    protected function casts(): array
    {
        return ['provisioned_at' => 'datetime'];
    }

    public function application()
    {
        return $this->belongsTo(AccountApplication::class, 'application_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
