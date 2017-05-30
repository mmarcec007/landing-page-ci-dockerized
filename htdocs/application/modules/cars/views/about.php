

<div class="container">
    <?php // echo $lastShown; ?>
    <a href="<?php echo site_url('home') ?>">Back to Home</a>
    <?php $counter = 0; ?>
    <ul class="collection" data-collapsible="accordion">
        <?php foreach ($collection as $car => $value) : ?>
            <?php  $counter++; ?>
            <li class="collection-item avatar" id="<?php echo $car ?>">
                <img src="<?php echo ford_image($car); ?>" alt="" class="circle">
                <span class="title"><?php echo $counter . ". " , $value["shortCarName"]; ?></span>
                <p> <?php echo $value["price"]; ?> </p>
                <a href="<?php echo to_view("details/index/", $car); ?>" class="secondary-content"><i class="material-icons">send</i></a>
            </li>
        <?php endforeach ?>
    </ul>
</div>

<script>
    var php_var = "<?php echo $lastShown; ?>";
    var element = document.getElementById(php_var);
    element.classList.add("active");
</script>