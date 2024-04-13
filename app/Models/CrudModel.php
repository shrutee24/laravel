<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    use HasFactory;

    protected $table = 'crud'; // Specify the table name if it's different from the default

    // If you have any relationships or other model-specific methods, you can define them here
}
