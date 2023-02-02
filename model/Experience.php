<?php

class Experience{

    // pro
    private string $titre;// VG $this->
    private int $duree;
    private string $desc;


    // const                        VL
    public function __construct(string $titre,int $duree,string $desc ){
        // VG = VL
        $this->titre = $titre;
        $this->duree = $duree;
        $this->desc = $desc;
    }

    // getter : récupérer 
    public function getTitre() : string{
        return $this->titre;
    }

    // setter : modifier
}