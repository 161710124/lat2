<?php

require_once 'lat2.php';

$oi = new robot('bob','masak');
echo "namanya...".$oi->get_nama().'<br>';
echo "kegunaan ...".$oi->get_kegunaan().'<br>';


?>