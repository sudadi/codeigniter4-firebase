<?php namespace Tatter\Firebase;

use Google\Cloud\Core\Timestamp;

class Entity extends \CodeIgniter\Entity
{
	protected $primaryKey = 'uid';

	protected $dates = ['createdAt', 'updatedAt'];
	
	/**
	 * Converts the given item into a \CodeIgniter\I18n\Time object.
	 * Adds support for Google\Cloud\Core\Timestamp
	 *
	 * @param $value
	 *
	 * @return \CodeIgniter\I18n\Time
	 * @throws \Exception
	 */
	protected function mutateDate($value)
	{
		if ($value instanceof Timestamp)
		{
			$value = $value->formatAsString();
		}

		return parent::mutateDate($value);
	}
}
