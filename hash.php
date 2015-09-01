<?php
require_once 'scripts/script.php';
/**
 *
 */
class hash extends Script
{
    protected $availableAlgos;
    protected $helpMessage = 'Returns a hash of the given string, hashed with the given algorithm';

    function __construct($message, $matches, $waConnection)
	{
        $this->availableAlgos = hash_algos();
		$this->matches = $matches;
		$this->message = $message;
		$this->waConnection = $waConnection;
	}

    public function run()
    {
        if(!in_array(strtolower($this->matches[1]), $this->availableAlgos)) {
            $this->response = $this->matches[1] . " is not supported!\n";
            $this->response .= "Available algorithms:\n";

            foreach ($this->availableAlgos as $value) {
                $this->response .= $value . "\n";
            }

            return $this->send($this->response);
        } else {
            return $this->send(hash($this->matches[1], $this->matches[2]));
        }
    }

    function __destruct()
    {

    }
}
