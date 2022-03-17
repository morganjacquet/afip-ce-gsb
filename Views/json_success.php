<?php

echo json_encode(array(
    'status'         => (isset($status) ? $status : 'success'),
    'datas'  => (isset($datas) ? $datas : array()),
    'message'       => (isset($message) ? $message : null)
));

?>