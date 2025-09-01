<script>
    $('.counter-plus').click(function(e){
        let qty=$(e.currentTarget).siblings('#qty');
        let qtyValue=parseInt(qty.Val())+1
        if(qtyValue>=<?php echo $valeur['Stock']?>){
            qtyValue = <?php echo $valeur['Stock']?>
        }
        qty.Val(qtyValue)
    });
    $('counter-moins').click(function(e){
        let qty=$(e.currentTareget).siblings('#qty');
        let qtyValue=parseInt(qty.Val())-1
        if(qtyValue<0){
            qtyValue = 0
        }
        qty.Val(qtyValue)
    });
</script>