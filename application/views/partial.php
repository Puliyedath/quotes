<?php
foreach($quotes as $quote) 
{ ?>
<div class="quote">
    <h1><?php echo $quote['author']?> </h1>
    <p><?php echo $quote['quote']?> </p> 
</div>
<?php
}
?>
