<table boarder="1" class="table">
<?php
foreach($arr as $key){
?>
<tr>
    <td><?php echo $key['name'];?></td>
    <td><?php echo $key['email'];?></td>
    <td><?php echo $key['phone'];?></td>
</tr>
<?php
}
?>
</table>
