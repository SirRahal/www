<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Book;

/* @var $this yii\web\View */
/* @var $model app\models\pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?/*= $form->field($model, 'book_ID')->textInput() */?>


    <?=
    $form->field($model, 'book_ID')
        ->dropDownList(
            ArrayHelper::map(Book::find()->all(), 'ID', 'name')
        )
    ?>



    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
