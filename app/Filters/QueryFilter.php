<?php
namespace App\Filters ;

use Illuminate\Database\Eloquent\Builder ;
use Illuminate\Http\Request ;
/**
 * 
 */
abstract class QueryFilter
{
	public $request ;
	protected $builder ;
	
	function __construct(Request $request)
	{
		$this->request = $request ;
	}

	public function apply(Builder $builder)
	{
		//return $builder ;
		$this->builder = $builder ;

		foreach ($this->filters() as $name => $value) {
			if (method_exists($this, $name)) {
				call_user_func_array([$this, $name], [$value]) ;
			}
			
		}
		return $this->builder ;
	}

	public function filters()
	{
		return $this->request->all() ;
	}
}