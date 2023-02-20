<?php
use yii\helpers\Html;
use kartik\icons\Icon;

/* @var $list \SysProd\Multiselect\MultiSelect[] */
/* @var $table \SysProd\Multiselect\MultiSelect[] */
/* @var $label \SysProd\Multiselect\MultiSelect */
/* @var $id \SysProd\Multiselect\MultiSelect */
/* @var $name \SysProd\Multiselect\MultiSelect */
/* @var $ajax \SysProd\Multiselect\MultiSelect */
/* @var $sortable \SysProd\Multiselect\MultiSelect */

?>
<div class="multi-select" id="<?= $id; ?>">
    <?php if($label){ ?>
        <label class="control-label" for=""><?= $label; ?></label>
    <?php } ?>

	<?= Html::dropDownList('', null, $list, ['class' => 'form-control list', 'id' => 'rules']); ?>
	<table class="table table-striped table-bordered table-condensed">
        <tbody>
            <tr class="hidden">
                <td></td>
                <td style="width: 30px;"><a href="#" class="remove"><?= Icon::show('trash-o', ['class' => 'fa-lg']) ?></a></td>
            </tr>
            <?php $isFirst = true; ?>
            <?php foreach($table as $dataId => $dataName): ?>
            <?php
                $class = '';
                if ($isFirst && $sortable) {
                    $class = 'success';
                    $isFirst = false;
                }
            ?>
            <tr data-id="<?= $dataId; ?>" class="<?= $class ?>">
                <td><?= $dataName; ?></td>
                <td style="width: 30px;"><a href="#" class="remove"><?= Icon::show('trash-o', ['class' => 'fa-lg']) ?></a></td>
                <?= Html::input('hidden', $name, $dataId) ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
	</table>
</div>