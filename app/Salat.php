<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $salats
 * @property string $adhan
 * @property string $iqama
 * @property string $created_at
 * @property string $updated_at
 */
class Salat extends Model
{

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['salat', 'adhan', 'iqama', 'created_at', 'updated_at'];

}
