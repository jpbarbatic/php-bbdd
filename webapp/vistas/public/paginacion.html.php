<div class="pagination">
    <ul>
        <?php for($i=1; $i<=$num_paginas; $i++): ?>
        <li  class="<?php echo $i==$pagina?'active':'' ?>">
            <a href="?p=<?php echo $i?>"><?php echo $i?></a>
        </li>
        <?php endfor;?>
    </ul>
</div>