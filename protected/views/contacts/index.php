<?php
/* @var $this ContactsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contacts',
);

$this->menu=array(
	array('label'=>'Create Contacts', 'url'=>array('create')),
	array('label'=>'Manage Contacts', 'url'=>array('admin')),
);
?>

<h1>Contacts</h1>
<table>
    <tr>
        <td></td>
        <td>Company</td>
        <td>Address</td>
        <td>City,State Zip</td>
        <td>email</td>
    </tr>
<?php if(isset($_SESSION['parsed_input'])){
   foreach($_SESSION['parsed_input'] as $data){
       $data = explode('--',$data);?>
       <tr>
       <?php foreach($data as $col)
       {
           if (strpos($col,'FAX') == false){
           ?>
           <td><?php echo $col; ?></td>
       <?php }} ?>
       </tr>
   <?php }
}else echo "no data"; ?>
</table>
