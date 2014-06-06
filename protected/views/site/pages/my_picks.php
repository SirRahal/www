<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/6/14
 * Time: 9:29 AM
 */
$this->pageTitle=Yii::app()->name . ' - My Picks';
$this->breadcrumbs=array(
    'My Picks',
);
?>

<script type="text/javascript">
    window.onload = function()
    {
        var myTrigger = document.getElementById('trigger');
        var myText = document.getElementById($(this).attr('id'));

        myTrigger.onclick = function()
        {
            var seed = $(this).attr('url');
            alert(seed);
            myText.innerHTML = "I just got added to this div!";
        }
    }

</script>

<h1>My Picks</h1>

<p>Please fill out the following form with your login credentials:</p>
<div style="position: absolute; width: 200px;z-index: 50; margin-left: 450px;">
    <div style="width:200px; margin:0 auto; margin-top: 300px;">
        <h3 style="">My Picks</h3>
    </div>
    <div class="regional_div" style="width:200px; margin:0 auto; margin-top: 10px; background: #ee666d;">
        <table>
            <?php for ($i = 1;$i<17; $i++){ ?>
                <tr>
                    <td id="radio<?php echo $i;?>"><?php echo $i; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<div class="clear"></div>
<div style="float: left; width: 200px; z-index: 100;">
    <h3>South</h3>
    <div class="regional_div" style="background: #fffd6b;">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 1)); ?>
    </div>
    <h3>East</h3>
    <div class="regional_div" style="background: #7eb9ef;">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 3)); ?>
    </div>
</div>
<div style="float: right; z-index: 100;">
    <h3>West</h3>
    <div class="regional_div" style="background: #c57d7a;">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 2)); ?>
    </div>
    <h3>Midwest</h3>
    <div class="regional_div" style="background: #60ff6a;">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 4)); ?>
    </div>
</div>


<div class="text" id="text"></div>



