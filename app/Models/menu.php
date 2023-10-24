<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'menu_name',
        'description',
        'price',
        'category',
        'picture',
    ];

    public function getImageURL()
    {
        if ($this->picture) {
            return url('storage/' . $this->picture);
        }
    }
}
