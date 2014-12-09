<?php
/* @var $this ListingsController */
/* @var $model Listings */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $user_ID = User::model()->get_user_ID();
    $user = User::model()->findByPk($user_ID);
    if (isset($model)){
        $date = $model->date;
    }
        $date = date("d-m-y");
    ?>
<style>
    table{
        border-collapse: separate;
        border-spacing: 20px 0px;
    }
</style>

    <!--If it is a copy-->
    <?php
    $url = $_SERVER['REQUEST_URI'];
    if( strpos( $url, 'create/' ) !== false ) {
        $exploded_url = explode('/',$url);
        $listing_copied = end($exploded_url);
        $model = Listings::model()->findByPk($listing_copied);
        // Do something
        echo("<h3 class='red_text'>Copied Item</h3>");
    }
    ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'listings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.<br/>If the information is not avalible, enter <span class="required">N/A</span> or <span class="required">0</span></p>

	<?php echo $form->errorSummary($model); ?>

    <div class="form_container">
        <div class="visibility_none">
            <?php echo $form->labelEx($model,'list_by'); ?>
            <?php echo $form->textField($model,'list_by',array('value'=>$user_ID)); ?>
            <?php echo $form->error($model,'list_by'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'inventory'); ?>
            <?php echo $form->textField($model,'inventory',array('size'=>15,'maxlength'=>45)); ?>
            <?php echo $form->error($model,'inventory'); ?>
        </div>

        <div class="visibility_none">
            <?php echo $form->labelEx($model,'date'); ?>
            <?php echo $form->textField($model,'date',array('value'=>$date)); ?>
            <?php echo $form->error($model,'date'); ?>
        </div>

        <div class="row">
            <script src="/js/jquery.js"></script>
            <script src="/js/fileuploadmulti.min.js"></script>
            <textarea id="mulitplefileuploader">upload</textarea>
            <div id="status"></div>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'description'); ?>
            <?php echo $form->textArea($model,'description',array('maxlength'=>500,'rows'=>4,'cols'=>60)); ?>
            <?php echo $form->error($model,'description'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'internal_number'); ?>
            <?php echo $form->textField($model,'internal_number',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'internal_number'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'manufacturer'); ?>
            <?php echo $form->textField($model,'manufacturer',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'manufacturer'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'serial_number'); ?>
            <?php echo $form->textField($model,'serial_number',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'serial_number'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'model_number'); ?>
            <?php echo $form->textField($model,'model_number',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'model_number'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'more_info'); ?>
            <?php echo $form->textArea($model,'more_info',array('maxlength'=>1500,'rows'=>4,'cols'=>60)); ?>
            <?php echo $form->error($model,'more_info'); ?>

        </div>

        <?php

        $role_list = array('0 - No Condition','1 - Very Poor', '2 - Poor','3 - Fair','4 - Good','5 - Like New');
        $options = array(
            'tabindex' => '0',
            'empty' => '(Select Condition)',
        );
        ?>
    </div>


    <div class="form_container">
        <div class="row">
            <?php echo $form->labelEx($model,'condition'); ?>
            <?php echo $form->dropDownList($model,'condition',$role_list, $options); ?>
            <?php echo $form->error($model,'condition'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model,'condition_info'); ?>
            <?php echo $form->textField($model,'condition_info',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'condition_info'); ?>
        </div>
        <!--dimmentions-->
        <h3>Measurements</h3>
        <h6>Please note that everything is in pounds and inches</h6>
        <div class="boxed">
            <div class="row">
                <?php echo $form->labelEx($model,'weight'); ?>
                <?php echo $form->textField($model,'weight',array('size'=>15,'maxlength'=>15)); ?>
                <?php echo $form->error($model,'weight'); ?>
            </div>

            <table style="color:#999999 !important;">
                <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <?php echo $form->labelEx($model,'length_1'); ?>
                            <?php echo $form->textField($model,'length_1',array('size'=>15,'maxlength'=>15)); ?>
                            <?php echo $form->error($model,'length_1'); ?>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <?php echo $form->labelEx($model,'width_1'); ?>
                            <?php echo $form->textField($model,'width_1',array('size'=>15,'maxlength'=>15)); ?>
                            <?php echo $form->error($model,'width_1'); ?>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <?php echo $form->labelEx($model,'height_1'); ?>
                            <?php echo $form->textField($model,'height_1',array('size'=>15,'maxlength'=>15)); ?>
                            <?php echo $form->error($model,'height_1'); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="row">
                            <?php echo $form->labelEx($model,'dims_2'); ?>
                            <?php echo $form->textField($model,'dims_2',array('size'=>50,'maxlength'=>15)); ?>
                            <?php echo $form->error($model,'dims_2'); ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <?php echo $form->labelEx($model,'length_2'); ?>
                            <?php echo $form->textField($model,'length_2',array('size'=>15,'maxlength'=>15)); ?>
                            <?php echo $form->error($model,'length_2'); ?>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <?php echo $form->labelEx($model,'width_2'); ?>
                            <?php echo $form->textField($model,'width_2',array('size'=>15,'maxlength'=>15)); ?>
                            <?php echo $form->error($model,'width_2'); ?>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <?php echo $form->labelEx($model,'height_2'); ?>
                            <?php echo $form->textField($model,'height_2',array('size'=>15,'maxlength'=>15)); ?>
                            <?php echo $form->error($model,'height_2'); ?>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
        <div <?php if($user['permission']<2){ echo 'style="display:none;"';} ?> >
            <h3>Lister's Info</h3>
            <div class="boxed">
                <div class="row">
                    <?php echo $form->labelEx($model,'price'); ?>
                    <?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
                    <?php echo $form->error($model,'price'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'listing_note'); ?>
                    <?php echo $form->textField($model,'listing_note',array('size'=>60,'maxlength'=>1500)); ?>
                    <?php echo $form->error($model,'listing_note'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'ebay_listed'); ?>
                    <?php echo $form->checkBox($model,'ebay_listed'); ?>
                    <?php echo $form->error($model,'ebay_listed'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'ebay_lister'); ?>
                    <?php echo $form->textField($model,'ebay_lister'); ?>
                    <?php echo $form->error($model,'ebay_lister'); ?>
                </div>

                <div class="row visibility_none">
                    <?php echo $form->labelEx($model,'ebay_date'); ?>
                    <?php echo $form->textField($model,'ebay_date'); ?>
                    <?php echo $form->error($model,'ebay_date'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'sold'); ?>
                    <?php echo $form->checkBox($model,'sold'); ?>
                    <?php echo $form->error($model,'sold'); ?>
                </div>

                <div class="row visibility_none">
                    <?php echo $form->labelEx($model,'sold_date'); ?>
                    <?php echo $form->textField($model,'sold_date'); ?>
                    <?php echo $form->error($model,'sold_date'); ?>
                </div>
            </div>
        </div>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create & Upload Images' : 'Save & Upload Images'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>
    $(document).ready(function()
    {

        var settings = {
            url: "/upload.php",
            method: "POST",
            allowedTypes:"jpg,png,gif,doc,pdf,zip",
            fileName: "myfile",
            multiple: true,
            onSuccess:function(files,data,xhr)
            {
                $("#status").html("<font color='green'>Upload is success</font>");
            },
            afterUploadAll:function()
            {
                alert("all images uploaded!!");
            },
            onError: function(files,status,errMsg)
            {
                $("#status").html("<font color='red'>Upload is Failed</font>");
            }
        }
        $("#mulitplefileuploader").uploadFile(settings);

    });
    function checkvalue(){
        var files = document.getElementsByClassName('upload-filename');

            alert(files.toSource());

    }


</script>

<button onclick="checkvalue()">Check Value</button>
