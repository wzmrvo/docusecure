<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessRequest extends Model
{
    protected $fillable = [
        'requester_id',
        'document_id',
        'reviewer_id',
        'requested_tier',
        'justification',
        'status',
        'decision_reason',
        'reviewed_at',
        'expires_at',
    ];

    protected function casts(): array
    {
        return [
            'reviewed_at' => 'datetime',
            'expires_at' => 'datetime',
        ];
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_id');
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }
}
