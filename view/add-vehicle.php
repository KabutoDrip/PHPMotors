<?php
$classificationSelector = "<select name='classSelector'>";
 foreach ($classifications as $classification) {
    $classificationSelector .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>";}
$classificationSelector .= "</select>";

