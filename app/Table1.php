<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table1 extends Model
{
    // which will be filled
    protected $fillable = ['title', 'paste_data'];
}
