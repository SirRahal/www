<?php
/* @var $this ManufacturerController */
/* @var $model Manufacturer */

$this->breadcrumbs=array(
	'Manufacturers'=>array('index'),
	'Manage',
);

?>
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<style>
    tbody{
        color:black;
    }
</style>

<h1>Manage Manufacturers</h1>

    <div class="spacer"></div>

    <a href="/index.php/manufacturer/create">Create Manufacturer</a>
<div>
<?php
$manufacturers = Manufacturer::model()->findAll(array(
    "order" => "name ASC",
));

?>
















    <table id="myTable" class="hover stripe row-border">
        <thead>
        <tr style="text-align: center">
            <td>Manufacturer</td>
            <td style="width:152px;">Options</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($manufacturers as $manufacturer){ ?>
            <tr>
                <td><?php echo $manufacturer->name; ?></td>
                <td style="text-align: center;"><a class="link" href="/index.php/manufacturer/update/<?php echo $manufacturer->ID; ?>">Edit</a> | <a class="link" style="cursor: pointer;" onclick="delete_manufacturer(<?php echo $manufacturer->ID; ?>)">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });

    function delete_manufacturer(id){
        var result = confirm("Are you sure you want to delete this manufacturer?");
        if (result==true) {
            var url = '<?php echo Yii::app()->createUrl('manufacturer/delete'); ?>/'+id;
            $.ajax({
                type: "POST",
                url: url,
                success: function(){
                    delete window.alert; // true
                    alert('manufacturer has been deleted.  The item will still display till the page has refreshed.');
                }
            });
        }
    };
</script>