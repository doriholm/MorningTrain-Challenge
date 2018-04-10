<?php 

    class Template {
        var $values = array();
        var $tpl;

        // This function is called every time a new object is created
        function __construct($_path = '') 
        {
            // Check if variable $_path is empty and if the file does exist
            if(!empty($_path))
            {
                if(file_exists($_path))
                {
                    $this->tpl = file_get_contents($_path);
                }
                else
                {
                    echo "Template error";
                }
            }
        }

        // Insert the placeholder key and the value into the array
        function assignValues($_findString, $_replaceString) 
        {
            if(!empty($_findString))
            {
                $this->values[strtoupper($_findString)] = $_replaceString;
            }
        }

        // Check if the value array is empty and if not then find the placeholder
        // and replace it with the value that it was assigned
        function showTpl() 
        {
            if(count($this->values) > 0)
            {
                foreach($this->values as $key => $value)
                {
                    $this->tpl = str_replace('{'. $key . '}', $value, $this->tpl);
                }
            }

            echo $this->tpl;
        }

    } 