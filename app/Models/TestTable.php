<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTable extends Model
{
    use HasFactory;

    protected $table = 'test_tables';

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];


}
