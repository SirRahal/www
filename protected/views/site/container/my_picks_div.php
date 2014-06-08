<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/7/14
 * Time: 7:58 PM
 */

?>
<div style="width:200px; margin:0 auto; margin-top: 300px;">
    <h3 style="">My Picks</h3>
</div>
<div class="regional_div" style="width:200px; margin:0 auto; margin-top: 10px; background: #ee666d;">
    <table>
        <?php for ($i = 1;$i<17; $i++){ ?>
            <tr>
                <td id="radio<?php echo $i;?>"><?php echo $i.' '.$picks[$i-1]; ?> </td>
            </tr>
        <?php } ?>
    </table>
</div>