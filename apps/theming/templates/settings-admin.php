<?php
/** @var array $_ */
/** @var OC_L10N $l */
script('theming', 'settings-admin');
style('theming', 'settings-admin')
?>
<div id="theming" class="section">
	<h2><?php p($l->t('Theming')); ?></h2>

	<p>
		<input id="themingName" class="theming-name" type="text" placeholder="<?php p($l->t('Name')); ?>" value="<?php p($_['name']) ?>"></input>
	</p>
	<p>
		<input id="themingUrl" class="theming-address" type="text" placeholder="<?php p($l->t('Web address https://…')); ?>" value="<?php p($_['url']) ?>"></input>
	</p>
	<p>
		<input id="themingSlogan" class="theming-slogan" type="text" placeholder="<?php p($l->t('Slogan')); ?>" value="<?php p($_['slogan']) ?>"></input>
	</p>
	<p>
		<input id="themingColor" class="theming-color" type="text" placeholder="<?php p($l->t('Color #0082c9')); ?>" value="<?php p($_['color']) ?>"></input>
	</p>
	<p>
		<input id="themingLogo" class="theming-logo" type="text" placeholder="<?php p($l->t('Logo')); ?>"></input>
	</p>
</div>
