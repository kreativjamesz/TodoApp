<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    $fillable = [
    	'from_department_id',
    	'to_department_id',
    	'request_by',
    	'request_type',
    	'urgency_type',
    	'due_date',
    	'item_request_code',
    	'item_request_desc',
    	'quantity',
    	'status',
    	'recieved_by',
    	'recieved_date',
    ];
}
