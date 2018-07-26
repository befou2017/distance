<?php
class commun 
{
    protected $dateStr="d-m-Y";
	public $Id;
	public $DateDebut; // datetime 
	public $DateFin; // datetime 
	public $isExist;
	public $NomDuMois=array("erreur","Janvier","Fevrier","Mars","Avril","Mai","Juin",
                 "Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
        public $url;
	public $now;

        public function __construct()
	{
            $this->Id = 0;
            $this->DateDebut ="01/01/1900";
            $this->DateFin ="01/01/1900";
            $this->isExist = false;
			$this->now=new DateTime("now");
        }
        public function setID($_id)
        {
            $this->Id=$_id;
        }
         public function  __destruct()
        {

         }
         public function DateDebutFin()
         {
            $texteFormate="";
             if($this->DateFin ==$this->DateDebut)
                    {
                       $texteFormate=$texteFormate."Le : "
                                        .date_format($this->DateDebut, $this->dateStr);
                    }else{
                          $texteFormate=$texteFormate."Du :"
                                        .date_format($this->DateDebut, $this->dateStr)
                                        .   " au : "
                                        .date_format($this->DateFin,$this->dateStr);
                    }
             return $texteFormate;
         }
}
php?>