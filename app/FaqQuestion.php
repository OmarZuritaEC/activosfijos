<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqQuestion extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'faq_questions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'answer',
        'question',
        'created_at',
        'updated_at',
        'deleted_at',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'category_id');
    }
}
