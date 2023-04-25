<?php
function gerarCampoInput($name, $id, $class, $value, $type) {
    switch ($type) {
        case 'text':
        case 'password':
        case 'number':
        case 'email':
        case 'date':
        case 'checkbox':
        case 'radio':
            break;
        default:
            $type = 'text';
            break;
    }

    $campoInput = '<input type="' . $type . '" name="' . $name . '" id="' . $id . '" class="' . $class . '" value="' . $value . '">';

    return $campoInput;
}
?>