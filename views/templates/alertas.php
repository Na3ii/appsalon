<?php
    foreach($alertas as $key => $mensajes):
        if(count($mensajes) > 0): 
    ?>                
    <div class="alerta <?php echo $key; ?>">
        <?php echo $mensajes[array_key_first($mensajes)]; ?>
    </div>
<?php endif;
    endforeach;
?>