/**
 * @author Björn Schießle <bjoern@schiessle.org>
 *
 * @copyright Copyright (c) 2016, Bjoern Schiessle
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the 
 * License, or (at your opinion) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

function setThemingValue(setting, value) {
	OC.AppConfig.setValue('theming', setting, value);
}

$(document).ready(function () {
	
	$('#themingName').keyup(function (e) {
		if (e.keyCode == 13) {
			setThemingValue('name', $(this).val());
		}
	}).focusout(function (e) {
		setThemingValue('name', $(this).val());
	});

	$('#themingUrl').keyup(function (e) {
		if (e.keyCode == 13) {
			setThemingValue('url', $(this).val());
			//OC.AppConfig.setValue('theming', 'name', $(this).val());
		}
	}).focusout(function (e) {
		setThemingValue('url', $(this).val());
	});

	$('#themingSlogan').keyup(function (e) {
		if (e.keyCode == 13) {
			setThemingValue('slogan', $(this).val());
			//OC.AppConfig.setValue('theming', 'name', $(this).val());
		}
	}).focusout(function (e) {
		setThemingValue('slogan', $(this).val());
	});

	$('#themingColor').keyup(function (e) {
		if (e.keyCode == 13) {
			setThemingValue('color', $(this).val());
			//OC.AppConfig.setValue('theming', 'name', $(this).val());
		}
	}).focusout(function (e) {
		setThemingValue('color', $(this).val());
	});

});
