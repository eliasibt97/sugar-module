<?php

class Validate {

    /**
     *@param array $data
     *@return string $response
     */
    public static function validateData($data) {

        $response = true;
        foreach($data as $input) {
            if(!is_numeric($input)) {
                $response = false;
                break;
            }
        }
        return $response;
    }

}

?>