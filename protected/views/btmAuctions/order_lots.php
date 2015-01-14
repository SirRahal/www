<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/14/15
 * Time: 5:16 PM
 */ ?>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-sortable.js"></script>

<?php $listings = $model->btmListings; ?>

<div class="span4">
    <h3>Sort This table</h3>
    <a href="">Save</a>
    <table class="table table-striped table-bordered sorted_table">
        <thead>
        <tr>
            <th>Original Lot</th>
            <th>Description</th>
            <th>Manufacturer</th>
            <th>Model</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($listings as $listing){ ?>
        <tr>
            <td><?php echo $listing->lot; ?></td>
            <td><?php echo $listing->description; ?></td>
            <td><?php echo $listing->manufacturer; ?></td>
            <td><?php echo $listing->model; ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script>
    // Sortable rows
    $('.sorted_table').sortable({
        containerSelector: 'table',
        itemPath: '> tbody',
        itemSelector: 'tr',
        placeholder: '<tr class="placeholder"/>'
    })

    // Sortable column heads
    var oldIndex
    $('.sorted_head tr').sortable({
        containerSelector: 'tr',
        itemSelector: 'th',
        placeholder: '<th class="placeholder"/>',
        vertical: false,
        onDragStart: function (item, group, _super) {
            oldIndex = item.index()
            item.appendTo(item.parent())
            _super(item)
        },
        onDrop: function  (item, container, _super) {
            var field,
                newIndex = item.index()

            if(newIndex != oldIndex)
                item.closest('table').find('tbody tr').each(function (i, row) {
                    row = $(row)
                    field = row.children().eq(oldIndex)
                    if(newIndex)
                        field.before(row.children()[newIndex])
                    else
                        row.prepend(field)
                })

            _super(item)
        }
    })
</script>