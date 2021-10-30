<?php

abstract class Perso
{
    // propriétés
    private $id;
    private $pseudo;
    private $personnage;
    private $pv = 100;
    private $attaque;
    private $defense;
    private $dormir;
    private $spell;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
        }

        if(is_callable([$this, $method])) {
            $this->$method($value);
        }
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    public function getPersonnage(): string
    {
        return $this->personnage;
    }

    public function setPersonnage(string $personnage): self
    {
        $this->personnage = $personnage;
        return $this;
    }

    public function getPv(): int
    {
        return $this->pv;
    }

    public function setPv(int $pv): self
    {
        $this->pv = $pv;
        return $this;
    }

    public function getAttaque(): int
    {
        return $this->attaque;
    }

    public function setAttaque(int $attaque): self
    {
        $this->attaque = $attaque;
        return $this;
    }

    public function getDefense(): int
    {
        return $this->defense;
    }

    public function setDefense($defense): self
    {
        $this->defense = $defense;
        return $this;
    }

    public function getDormir()
    {
        return $this->dormir;
    }

    public function setDormir($dormir): self
    {
        // datetime
        $this->dormir = $dormir;
        return $this;
    }

    public function getSpell(): bool
    {
        return $this->spell;
    }

    public function setSpell($spell): self
    {
        $this->spell = $spell;
        return $this;
    }

    public function attaque(Perso $perso)
    {
        $newPv = $perso->getPv() - ($this->getDefense() - $perso->getAttaque());
        if ($newPv > $perso->getPv()) {
            return;
        }
        $perso->setPv($newPv);
    }
}

$q = $bdd->query('SELECT * FROM member');
$q->setFetchMode(PDO::FETCH_CLASS, 'Perso');
$persos = $q->fetchAll();
