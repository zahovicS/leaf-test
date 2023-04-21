<?php

namespace Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {
    use SoftDeletes;
	protected $table = 'products';
    protected $primaryKey = 'idProducto';
}
