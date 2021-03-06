<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Ushahidi API Formatter for Form Role
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

use Ushahidi\Core\Traits\FormatterAuthorizerMetadata;

class Ushahidi_Formatter_Form_Contact extends Ushahidi_Formatter_API
{
	use FormatterAuthorizerMetadata;

	/**
	 * @param $form_id
	 * @param array $entities (the entities that were added)
	 * @param array $invalidatedContacts ([{'contact': number, 'contact': id, 'form_id:' form_id}...]
	 * @return array|mixed
	 */
	public function __invoke($form_id, $entities = [], $invalidatedContacts = [])
	{
		$data = [
			'form_id'  => $form_id,
			'count' => count($entities),
			'invalidated_contacts' => $invalidatedContacts
		];
		return $data;
	}
}
