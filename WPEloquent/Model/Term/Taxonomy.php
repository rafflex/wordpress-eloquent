<?php

namespace WPEloquent\Model\Term;

class Taxonomy extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'term_taxonomy';
    protected $primaryKey = 'term_taxonomy_id';
    protected $taxonomy = null;
    protected $guarded = [];
    public $timestamps = false;

    public function newQuery()
    {
        $query = parent::newQuery();
        if ($this->taxonomy) {
            return $this->scopeType($query, $this->taxonomy);
        }
        return $query;
    }

    public function term()
    {
        return $this->belongsTo(\WPEloquent\Model\Term::class, 'term_id', 'term_id');
    }

    public function scopeType($query, $type)
    {
        return $query->where('taxonomy', $type);
    }
}
