<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tach
 *
 * @property $id
 * @property $nom
 * @property $description
 * @property $niveau_complexite
 * @property $created_at
 * @property $updated_at
 *
 * @property Employe[] $employes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tach extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nom', 'description', 'niveau_complexite'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employes()
    {
        return $this->hasMany(\App\Models\Employe::class, 'id', 'tache_id');
    }
    
}
