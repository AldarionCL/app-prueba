<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'titulo',
        'contenido',
        'user_id'
    ];

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
}
