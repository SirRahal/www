<?php
/* @var $this GameController */
/* @var $model Game */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'game-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'tournament_ID'); ?>
        <?php
        $role_list_tournament = CHtml::listData(Tournament::model()->findAll(array('order'=>'year ASC')), 'ID', 'year');
        $options_for_tournament = array(
            'tabindex' => '0',
            'empty' => '(Select a tournament)',
        );
        ?>
        <?php echo $form->dropDownList($model,'tournament_ID', $role_list_tournament, $options_for_tournament); ?>
        <?php echo $form->error($model,'tournament_ID'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'date'); ?>
        <?php echo $form->dateField($model,'date'); ?>
        <?php echo $form->error($model,'date'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'time'); ?>
        <?php echo $form->timeField($model,'time'); ?>
        <?php echo $form->error($model,'time'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'location'); ?>
        <?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'location'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'team_1_ID'); ?>
        <?php
        $role_list = CHtml::listData(Team::model()->findAll(array('order'=>'name ASC')), 'ID', 'name');
        $options = array(
            'tabindex' => '0',
            'empty' => '(Select a team)',
        );
        ?>
        <?php echo $form->dropDownList($model,'team_1_ID', $role_list, $options); ?>
        <?php echo $form->error($model,'team_1_ID'); ?>

    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'team_2_ID'); ?>
        <?php echo $form->dropDownList($model,'team_2_ID', $role_list, $options); ?>
        <?php echo $form->error($model,'team_2_ID'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'team_1_score'); ?>
        <?php echo $form->textField($model,'team_1_score'); ?>
        <?php echo $form->error($model,'team_1_score'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'team_2_score'); ?>
        <?php echo $form->textField($model,'team_2_score'); ?>
        <?php echo $form->error($model,'team_2_score'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'round'); ?>
        <?php echo $form->textField($model,'round'); ?>
        <?php echo $form->error($model,'round'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->