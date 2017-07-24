<?php
 
class Dni extends Eloquent {
	
	protected $table = 'dnis';
	public $timestamps = false;
 
	public function user()
	{
	return $this->belongsTo('User');
	}
}
?>