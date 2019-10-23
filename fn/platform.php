<?php

    $type = $_POST['type'];

    switch ($type) {
        case 'date':
            date_default_timezone_set('America/El_Salvador');
            $resp = array();
            $datetime = new DateTime('NOW');
            $resp['date'] = $datetime->format('Y\-m\-d\ h:i:s A');
            echo json_encode($resp);
            break;
    }

?>