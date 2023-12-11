<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nyobacrud extends Model
{
    protected $table = "dataUser";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'NHP', 'tglPembuatan'];
};
