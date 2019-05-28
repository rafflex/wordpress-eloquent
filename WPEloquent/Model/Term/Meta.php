<?php

namespace WPEloquent\Model\Term;

class Meta extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'termmeta';
    protected $fillable = ['meta_key', 'meta_value'];
    protected $primaryKey = 'meta_id';

}
