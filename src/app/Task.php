<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    const STATUS = [
        1 => [ 'label' => 'NOT', 'class' => 'label-danger'],
        2 => [ 'label' => 'DOING', 'class' => 'label-info'],
        3 => [ 'label' => 'DONE', 'class' => ''],
    ];

    public function getStatusLabelAttribute()
    {
        $status = $this->attributes['status'];

        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['class'];
    }

    public function getFormatterDueDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d' . $this->attributes['due_date'])
            ->format('Y/m/d');
    }
}
