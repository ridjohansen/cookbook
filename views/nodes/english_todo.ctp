<?php /* SVN FILE: $Id: english_todo.ctp 707 2008-11-19 12:18:03Z AD7six $ */ ?>
<?php /* SVN FILE: $Id: english_todo.ctp 707 2008-11-19 12:18:03Z AD7six $ */ ?>
<div class="nodes view">
<div class="summary">
<p>These sections have been marked as needing updating</p>
</div>
<?php
foreach ($data as $id => $row) {
	extract ($row);
	$sequence = $Node['sequence'];
	$sequence = $sequence?$sequence:'#';
	echo "<h2 id=\"{$Revision['slug']}-{$Node['id']}\">" .
		$html->link($sequence, '#' . $Revision['slug'] . '-' . $Node['id']) . ' ' . htmlspecialchars($Revision['title']) . "</h2>";

	echo '<div class="options">';
		echo $this->element('node_options', array('data' => $row));
	echo '</div>';
}
?>
</div>
<?php echo $this->element('paging');