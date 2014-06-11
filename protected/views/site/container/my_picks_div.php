<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/7/14
 * Time: 7:58 PM
 *
 * $picks[] : array of 16 of the set/selected radio buttons for the seeds
*/

?>
    <table>
        <!-- $i is the seed -->
        <?php for ($i = 1;$i<17; $i++){ ?>
            <tr>
                <!--echo out the selected radio buttons-->
                <td id="radio<?php echo $i;?>" team_ID='' ticket_ID=''><?php echo $i.' '.$picks[$i-1]; ?></td>
            </tr>
        <?php } ?>
    </table>
<!--add the three buttons as an example-->
<div class="picks">
    <!--save-->
        <a style="width:100%;" href="#">Save</a>
    <!--radom select all seeds-->
        <a style="width:100%;" href="#">Random</a>
    <!--reset all seeds-->
        <a style="width:100%;" href="#">Reset</a>
</div>