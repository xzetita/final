<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class create_noticia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'create_noticia';
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    protected $guarded = [];
    public function users(){
        return $this ->belongsToMany(User::class,"users");
       }
}
