<?php
$cities = ['london', 'paris', 'berlin'];
?>


<ul>
    <?php foreach ($cities as $city) : ?>
        <li><a href="<?php echo '/' . $city . '.php' ?>"><?php echo ucfirst($city) ?></a></li>
    <?php endforeach;
    ?>
</ul>