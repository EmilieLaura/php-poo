<?php

class Magicien extends Perso
{
    private $personnage = 'guerrier';
    private $spell = False;

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

    public function getPersonnage(): string
    {
        return $this->personnage;
    }

    public function setPersonnage(string $personnage): self
    {
        $this->personnage = $personnage;
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
}