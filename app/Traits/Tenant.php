<?php
	namespace App\Traits;
	use Auth;
	use Illuminate\Database\Eloquent\Builder;

	trait Tenant 
	{
		public static function bootTenant ()
		{
			if(Auth::check()){
				static::creating(function ($model) {
					$model->id_user = Auth::user()->id;
				});
				static::addGlobalScope("id_user", function (Builder $builder) { 
					if(Auth::check()){
						return $builder->where("id_user", Auth::user()->id);	
					} 
		        });
			}
		}
	} 
?>