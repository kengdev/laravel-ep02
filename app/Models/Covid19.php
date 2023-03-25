<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    use HasFactory;

    protected $table = "covid19s";

    protected $fillable = ["date","country","total","active","death","recovered","total_in_1m","remark"];

    protected $primaryKey = "id";
}
