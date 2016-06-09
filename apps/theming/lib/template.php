<?php
/**
 * @copyright Copyright (c) 2016 Bjoern Schiessle <bjoern@schiessle.org>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCA\Theming;


use OCP\IConfig;
use OCP\IL10N;

class Template {
	
	/** @var IConfig */
	private $config;
	
	/** @var  IL10N */
	private $l;

	/** @var string */
	private $name;

	/** @var string */
	private $url;

	/** @var string */
	private $slogan;

	/** @var string */
	private $color;
	
	public function __construct(IConfig $config, IL10N $l) {
		$this->config = $config;
		$this->l = $l;

		$this->name = 'Nextcloud';
		$this->url = 'https://nextcloud.com';
		$this->slogan = $this->l->t('a safe home for all your data');
		$this->color = '#0082c9';
	}

	public function getName() {
		return $this->config->getAppValue('theming', 'name', $this->name);
	}
	
	public function getUrl() {
		return $this->config->getAppValue('theming', 'url', $this->url);
	}

	public function getSlogan() {
		return $this->config->getAppValue('theming', 'slogan', $this->slogan);
	}

	public function getColor() {
		return $this->config->getAppValue('theming', 'color', $this->color);
	}

}
