<?php 
class Application 
{
    private $system;
    private $timer;
    private $intervalId;
    private $count;

    public function __construct() 
    {
        $this->system = new \Phastlight\System();
        $this->timer = $this->system->import("timer");
        $this->count = 0;
    }

    public function run() 
    {
        $this->timer->setInterval(array($this, "handleInterval"), 1000);
    }

    /**
     * this must be a public method
     */
    public function handleInterval()
    {
        print "ok";
    }
}

$app = new Application();
$app->run();
