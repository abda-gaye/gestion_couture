<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{

    use HasFactory,softDeletes;
    protected $guarded = [
        "id"
    ];
    protected $hidden = [
        "created_at",
		"updated_at"
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
