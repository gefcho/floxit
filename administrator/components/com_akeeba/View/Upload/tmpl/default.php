<?php
/**
 * @package   AkeebaBackup
 * @copyright Copyright (c)2006-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

// Protect from unauthorized access
defined('_JEXEC') or die();

$js = <<< JS

;// This comment is intentionally put here to prevent badly written plugins from causing a Javascript error
// due to missing trailing semicolon and/or newline in their code.
akeeba.System.documentReady(function(){
    document.forms.akeebaform.submit();
});

JS;

$this->getContainer()->template->addJSInline($js);
?>
<form action="index.php" method="get" name="akeebaform" id="akeebaform">
	<input type="hidden" name="option" value="com_akeeba" />
	<input type="hidden" name="view" value="Upload" />
	<input type="hidden" name="task" value="upload" />
	<input type="hidden" name="tmpl" value="component" />
	<input type="hidden" name="id" value="<?php echo (int) $this->id; ?>" />
	<input type="hidden" name="part" value="0" />
	<input type="hidden" name="frag" value="0" />
</form>

<div class="akeeba-panel--information">
    <p>
        <?php echo \JText::_('COM_AKEEBA_TRANSFER_MSG_START'); ?>
    </p>
</div>
