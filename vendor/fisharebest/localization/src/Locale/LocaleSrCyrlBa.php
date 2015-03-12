<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSrCyrlBa
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSrCyrlBa extends LocaleSrCyrl {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryBa;
	}
}