<?php
Class TableHtml5{

    private $tRows=[];
    private $tbody;
    private $thead;
    private $startTable;
    private $endTable;

    public function __construct()
    {
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';
    }
    
    public function startTable()
	  {
	    	$this->startTable = "<table class=\"table\">";
	  }

    public function setTheader($title=[])
    {
        $this->thead = " <thead class=\"thead-dark\"><tr><th scope=\"col\">" . implode("</th><th>", $title) . "</th></tr></thead>";
    }

    public function setRows($tRows=[])
    {
        $this->tRows = $tRows;
    }
    public function tBody()
    {
        $this->tbody = "<tbody>";
            for($i=0;  $i < count($this->tRows); $i++)
	    {
	      $this->tbody .= "<tr><td>".implode("</td><td>", $this->tRows[$i])."</td></tr>";
            }					
	$this->tbody .= "</tbody>";
    }
	
     public function endTable()
     {
	$this->endTable = "</table>";
     }
	
     public function getRenderView()
     {
       return $this->startTable.$this->thead.$this->tbody.$this->endTable;
     }
}
	
