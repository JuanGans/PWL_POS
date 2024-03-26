<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\UserModel;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'm_level';
    protected $primaykey = 'level_id';

    public function user()
    {
        return $this->belongsTo(UserModel::class);
    }
}