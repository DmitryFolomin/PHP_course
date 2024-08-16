<?php
// usort.php

// usort|uasort()
usort($catalog['products'], fn ($a, $b) => $a['price'] <=> $b['price']);
var_dump($catalog['products']);