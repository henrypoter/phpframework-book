<?php 
include("../phpheader.inc.php");
// this includes the adodb library automatically
$sql = "select * from contactlog";
$rs = $conn->Execute($sql);
?>
<table>
	<tr>
		<td>id</td>
		<td>name</td>
		<td>email</td>
		<td>comments</td>
		<td>the time</td>
	</tr>
<?
while (!$rs->EOF) {
    $id = $rs->fields[0];
    $name = $rs->fields[1];
    $email = $rs->fields[2];
    $comments = $rs->fields[3];
    $thetime = $rs->fields[4];
    ?>
    <tr>
	  <td><?=$id?></td>
        <td><?=$name?></td>
        <td><?=$email?></td>
        <td><?=$comments?></td>
        <td><?=$thetime?></td>
    </tr>
<?
	$rs->MoveNext();
}
?>
</table>

