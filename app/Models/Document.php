<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'title',
        'tracking_number',
        'category_id',
        'department_id',
        'uploader_id',
        'file_path',
        'original_name',
        'mime_type',
        'size_bytes',
        'sha256',
        'access_tier',
        'status',
        'sealed_at',
    ];

    protected function casts(): array
    {
        return ['sealed_at' => 'datetime'];
    }

    public function category()
    {
        return $this->belongsTo(DocumentCategory::class, 'category_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploader_id');
    }

    public function accessRequests()
    {
        return $this->hasMany(AccessRequest::class);
    }
}
