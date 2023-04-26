<table boarder="1" class="table">
<?php
foreach($arr as $key){
?>
<tr>

    <td><?php echo $key['name']?></td>
    <td><?php echo $key['email']?></td>
    <td><?php echo $key['phone']?></td>
    <td><a href="?id=<?=$key['id']?>&action=edit">edit</a></td>
</tr>
<?php
}
?>
</table>
