<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Competence
 *
 * @property $id
 * @property $aptitude
 * @property $created_at
 * @property $updated_at
 *
 * @property CompetenceEmploye[] $competenceEmployes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Competence extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['aptitude'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function competenceEmployes()
    {
        return $this->hasMany(\App\Models\CompetenceEmploye::class, 'id', 'competence_id');
    }
    
}
