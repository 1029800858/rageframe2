<?php

use yii\widgets\ActiveForm;
use common\helpers\ArrayHelper;
use common\helpers\Url;

$form = ActiveForm::begin([
    'id' => $model->formName(),
    'enableAjaxValidation' => true,
    'validationUrl' => Url::to(['update-level', 'id' => $model['id']]),
]);
?>

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span>
        </button>
        <h4 class="modal-title">基本信息</h4>
    </div>
    <div class="modal-body">
        <?= $form->field($model, 'current_level')->dropDownList($levelMap, [
            'prompt' => '请选择',
        ]); ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
        <button class="btn btn-primary" type="submit">保存</button>
    </div>
<?php ActiveForm::end(); ?>