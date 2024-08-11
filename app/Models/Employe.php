<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employe
 *
 * @property $id
 * @property $nom
 * @property $prenom
 * @property $departement
 * @property $poste
 * @property $tache_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Tach $tache
 * @property CompetenceEmploye[] $competenceEmployes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employe extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nom', 'prenom', 'departement', 'poste', 'tache_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tach()
    {
        return $this->belongsTo(\App\Models\Tach::class, 'tache_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function competenceEmployes()
    {
        return $this->hasMany(\App\Models\CompetenceEmploye::class, 'id', 'employe_id');
    }

}
