<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    //
    protected $fillable = ['name', 'author', 'publisher', 'notes', 'status', 'deadline_date'];
}
