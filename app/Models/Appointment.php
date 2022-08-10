<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

            /**
     * The appointments belongsTo a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The appointments belongsTo a patient
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * The appointments also belongsTo a dentist
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dentist(): BelongsTo
    {
        return $this->belongsTo(Dentist::class);
    }
}
