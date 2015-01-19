<?php

/* 
The original HTML:
    <a href="./data/new-zealand-landscape-cc-2006-big.jpg" data-lightbox="gallery" 
    data-title="New Zealand landscape ... Posted 2014.04.02 by mickey, in landscape">
    <img src="./data/thumb/new-zealand-landscape-cc-2006-big.jpg"/>
</a>

Converted into a view fragment template, instead */

?>
<a href="./data/{filename}" data-lightbox="gallery" 
   data-title="{title} ... Posted {uploaded} by {uploader}, in {category}">
    <img src="./data/thumb/{filename}"/>
</a>
