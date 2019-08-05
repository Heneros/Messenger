<?php


class base_class extends db {
   
    private $Query;

    public function Normal_Query ($query, $param = null) 
    {
        if(is_null($param))
        {
        return $this->Qyery->execute();
        $this->Query = $this->con->prepare();

    } else { 
      $this->Query = $this->con->prepare($query);
      return $this->Query->execute($param);  
    }
}
    public function Count_Rows(){
        return $this->Query->rowCount();
    }
}










?>