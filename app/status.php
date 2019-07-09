<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Traits\Tenant;
class status extends Model
{
    use Tenant;
    
    protected $table = "status";
    protected $fillable = ["content", "id_user"];

    public function id_user ()
    {
    	return $this->belongsTo("App\User");
    }
}
