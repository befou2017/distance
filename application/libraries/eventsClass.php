<?php
defined('BASEPATH') OR exit('No direct script access allowed');
using("commonClass.php");

class Event extends commun{

	public $nomEvent;
	public $nomOrga;
	public $Organisateur;
	public $Lien;
	public $type;
	public $LieuEvent;
	public $lieu;
    public $gmap;
	public $prix1;
	public $prix2;
	public $prix3;
	public $date;
	public $duree;
	public $reglementaladiscipline;
	public $nombreferme;
	public $EvenementPasse;
	public $quota;
	public $affiche;
	public $blabla;	
    public $niveau;
    public $cp;
    public $ville;
    public $calendrier;
    public $cache;
    public $inscriptionsWeb;
    public $nbAttente;
    public $boolAttente;
    
    public $boolFrenchOnly=false;
    public $boolInscriptionsPrio=false;
    public $arrayInscriptionPrio;
    public $InfosInscriptionPrio;

        public function get_ListEvent()
        {

        }
        public function __construct($IDEvent = null)
        {// S'il y a bien un id d'event
            //ecrire_log("IDEvent : ! : ".$IDEvent);
            $this->now=new DateTime("now");
            $this->bdd = new bdd();
            if ( $IDEvent != null )
            {
                $this->chargeEvent($IDEvent);
                /*** Inscriptions Prioritaires ****/ 
                //$this->inscriptionPrio();
                
            }else{
                $this->nomEvent="Nouveau";
                // Si pas d'id ==> N'Ã©xiste pas
                $this->isExist = false;
            }

        }
        public function chargeEvent($IDEvent)
	    {
			$this->ID = sanitize_stringV2($IDEvent,"int");
            
            if(!is_numeric($this->ID))
            {
                ecrire_log("ID non numérique ! : ".$this->ID." Avant le sanitize : ".$IDEvent);
                return null;
            }
            $array = array('ID' => $IDEvent);
            $this->db->select('id,titre, orga, date')->from('event')->where($array);
        }
}

?>
