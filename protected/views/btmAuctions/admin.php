<?php
/* @var $this BtmauctionController */
/* @var $model Btmauction */

$this->breadcrumbs=array(
	'Auctions',
);

$auctions = Btmauctions::model()->findAll();
?>

<h1>Manage Btm Auctions</h1>

<div class="spacer"></div>

<a href="/index.php/btmauctions/create">Create Auction</a>


<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<style>
tbody{
    color:black;
    text-align: center;
}
</style>
<table id="myTable" class="hover stripe row-border">
    <thead>
    <tr style="text-align: center">
        <td>Name</td>
        <td># of Items</td>
        <td>Options</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($auctions as $auction){ ?>
    <tr>
        <td><?php echo $auction->name; ?></td>
        <td><?php echo count($auction->btmListings); ?></td>
        <td style="text-align: center;">
            <a class="link" href="/index.php/btmauctions/view/<?php echo $auction->ID; ?>">View</a>
            | <a class="link" href="/index.php/btmauctions/update/<?php echo $auction->ID; ?>">Edit</a>
            <?php if(User::model()->findByPk(User::model()->get_user_ID())->permission > 2){ ?>
                | <a class="link" style="cursor: pointer;" onclick="delete_auction(<?php echo $auction->ID; ?>)">Delete</a>
           <?php }?>
        </td>
    </tr>
<?php } ?>
</tbody>
</table>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });

    function delete_auction(id){
        var result = confirm("Are you sure you want to delete this auction?");
        if (result==true) {
            var url = '<?php echo Yii::app()->createUrl('btmauctions/delete'); ?>/'+id;
            $.ajax({
                type: "POST",
                url: url,
                success: function(){
                    alert('Item has been deleted.  The item will still display till the page has refreshed.');
                }
            });
        }
    };
</script>