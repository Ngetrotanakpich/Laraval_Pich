<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_model extends Model
{

    protected $table = 'tbl_bookingmore';
    public $timestamps = false;
    protected $primaryKey = 'id'; // name of primarykey if name different from default ID

}

