<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookTable extends Model
{
    protected $fillable = [
        'name', 'phone', 'Num_peaple','date','time','email','book_id','nafigation'
    ];
}
