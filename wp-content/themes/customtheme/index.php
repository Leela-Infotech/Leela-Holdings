<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();
?>

<div class="content p-5">
    Content
</div>

<?php
trait single{
    public function single(){
    echo "Hello world";
    }
}
$base = new base();
$base->single;
?>

<?php
get_footer();