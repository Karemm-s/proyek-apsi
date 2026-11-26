<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class PsychologistFeedback extends Model
{
    protected $fillable = ['report_id', 'psychologist_id', 'summary', 'condition_update', 'recommendation'];

    public function setSummaryAttribute(?string $value): void
    {
        $this->attributes['summary'] = $value === null ? null : Crypt::encryptString($value);
    }

    public function getSummaryAttribute(?string $value): ?string
    {
        return $value === null ? null : Crypt::decryptString($value);
    }

    public function setConditionUpdateAttribute(?string $value): void
    {
        $this->attributes['condition_update'] = $value === null ? null : Crypt::encryptString($value);
    }

    public function getConditionUpdateAttribute(?string $value): ?string
    {
        return $value === null ? null : Crypt::decryptString($value);
    }

    public function setRecommendationAttribute(?string $value): void
    {
        $this->attributes['recommendation'] = $value === null ? null : Crypt::encryptString($value);
    }

    public function getRecommendationAttribute(?string $value): ?string
    {
        return $value === null ? null : Crypt::decryptString($value);
    }

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

    public function psychologist()
    {
        return $this->belongsTo(User::class, 'psychologist_id');
    }
}
