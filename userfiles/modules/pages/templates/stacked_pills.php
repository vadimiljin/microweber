<?php

/*

type: layout

name: Stacked Pills

description: List Navigation

*/

?>

<?php
    $params['ul_class'] = 'nav nav-pills nav-stacked';
	$params['ul_class_deep'] = 'nav nav-pills nav-stacked';
?>

<div class="pages-nav">
	<?php  mw('content')->pages_tree($params);  ?>
</div>
