<?php
/**
 *
 */
class hash
{
    //This is holding our matches
    private $matches;
    private $availableAlgos;
    private $response;


    function __construct($matches)
    {
        $this->matches = $matches;
        $this->availableAlgos = hash_algos();
    }

    public function returnType()
    {
        return 'text';
    }
    public function run()
    {
        if(!in_array(strtolower($this->matches[1]), $this->availableAlgos)) {
            $this->response = $this->matches[1] . ' is not supported!\n';
            $this->response += 'Available algorithms:\n';

            foreach ($this->availableAlgos as $value) {
                $this->response += $value . '\n';
            }

            return $this->response;
        } else {
            return hash($this->matches[1], $this->matches[2]);
        }
    }

    function __destruct()
    {

    }
}
