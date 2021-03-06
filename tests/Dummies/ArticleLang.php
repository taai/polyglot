<?php
use Illuminate\Database\Eloquent\Model;

class ArticleLang extends Model
{
	public function whereLang($lang)
	{
		$relation = Mockery::mock('relation');
		$relation->shouldReceive('getResults')->andReturnUsing(function() use ($relation) {
			return $relation;
		});

		$relation->name = $lang == 'fr' ? 'Nom' : 'Name';

		return $relation;
	}
}
