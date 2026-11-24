<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    protected $fillable = ['name', 'slug', 'access_tier', 'department_id', 'active'];

    protected function casts(): array
    {
        return ['active' => 'boolean'];
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'category_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
