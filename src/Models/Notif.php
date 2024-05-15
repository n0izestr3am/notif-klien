<?php

namespace n0izestr3am\notifklien\Models;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
	protected $table = 'notif_klien';
    protected $fillable = ['name','domain','phone_number','address','serial','expired','status'];	
}

