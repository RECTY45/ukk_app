<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tapel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tbl_tapels';

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
