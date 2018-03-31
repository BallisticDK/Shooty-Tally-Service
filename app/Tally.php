<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tally extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    protected $table = 'tallies';
    protected $guarded = [];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'tally_weapons_fk', 'weapon_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'tally_user_fk', 'user_id');
    }

}
