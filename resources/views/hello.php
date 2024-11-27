hello <?php echo $nom  ." ". $prenom ?>
<h4>Cours</h4>
<ul>
<?php foreach($cours as $value): ?>
    <li><?php echo $value; ?></li>
    <?php endforeach;?>
</ul>