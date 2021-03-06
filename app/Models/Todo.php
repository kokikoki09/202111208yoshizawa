<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['content'];

    public static $rules = array(
        'content' => 'string
        |min:0|max:191',
    );

    public function getTimes(){
        return $this->created_at;
    }
}
