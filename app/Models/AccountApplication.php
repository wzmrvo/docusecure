<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountApplication extends Model
{
    protected $fillable = [
        'full_name',
        'identification_number',
        'institutional_email',
        'phone',
        'college_unit',
        'department_unit',
        'clearance_tier',
        'justification',
        'status',
        'reviewed_by',
        'reviewed_at',
        'rejection_reason',
        'password_hash',
    ];

    protected function casts(): array
    {
        return ['reviewed_at' => 'datetime'];
    }

    protected $hidden = [
        'password_hash',
    ];

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    public function provisioningRecord()
    {
        return $this->hasOne(AccountProvisioningRecord::class, 'application_id');
    }

    public function userAccount()
    {
        return $this->hasOne(User::class, 'email', 'institutional_email');
    }
}
