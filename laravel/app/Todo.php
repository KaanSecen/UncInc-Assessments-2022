<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model for the table.
 */
class Todo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'todos';


    /**
     * @var array fillable containing the fields.
     */
    protected $fillable = ['title', 'description', 'api_token'];
}
