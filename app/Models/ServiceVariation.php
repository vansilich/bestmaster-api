<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class ServiceVariation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'services_variations';
    protected $fillable = ['service_id', 'duration', 'price'];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
