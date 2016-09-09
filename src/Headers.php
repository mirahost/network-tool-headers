<?php

namespace Mirahost\NetworkTools;

class Headers
{

    public function getHeaders($url)
    {

        $output = 'No HTTP Response: Invalid URL (Prefix with http:// or https://)';

        $result = @get_headers($url, 1);

        if($result !== false) {

            $output = '';
            foreach ($result as $key => $var ) {

                if(is_array($var)) {
                    $output .= $key .': ' ;
                    foreach($var as $value) {
                        $output .= $value . "\n";
                    }

                } else {
                    $output .= $key .': ' . $var . "\n";

                }
            }
        }

        return $output;
    }
}