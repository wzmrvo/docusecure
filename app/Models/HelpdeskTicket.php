<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HelpdeskTicket extends Model
{
    public const CATEGORIES = [
        'account_access',
        'two_factor',
        'document_access',
        'technical_incident',
        'other',
    ];

    public const PRIORITIES = ['low', 'normal', 'urgent'];

    public const STATUSES = [
        'new',
        'in_progress',
        'waiting_on_requester',
        'resolved',
        'closed',
    ];

    protected $fillable = [
        'reference',
        'requester_name',
        'requester_contact',
        'category',
        'priority',
        'details',
        'status',
        'assigned_to',
    ];

    public function assignedAdmin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(HelpdeskTicketActivity::class);
    }
}
