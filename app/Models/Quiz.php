<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Question;

class Quiz extends Model
{
    use HasFactory;

    public function author(){
        return $this -> belongsTo(User::class, 'author_ID');
    }

    public function question() {
        return $this -> hasMany(Question::class);
    }

    protected $fillable = [

        'Title',
        'Image',
        'Description',
        'author_ID'

    ];
}
