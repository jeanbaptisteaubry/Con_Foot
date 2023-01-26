<?php

class Match
{
    private string $equipe1;
    private string $equipe2;
    private int $score1;
    private int $score2;

    public function __construct(string $equipe1, string $equipe2, int $score1, int $score2)
    {
        $this->equipe1 = $equipe1;
        $this->equipe2 = $equipe2;
        $this->score1 = $score1;
        $this->score2 = $score2;
    }

    public function getEquipe1(): string
    {
        return $this->equipe1;
    }

    public function getEquipe2(): string
    {
        return $this->equipe2;
    }

    public function getScore1(): int
    {
        return $this->score1;
    }

    public function getScore2(): int
    {
        return $this->score2;
    }

    public function setEquipe1(string $equipe1): void
    {
        $this->equipe1 = $equipe1;
    }

    public function setEquipe2(string $equipe2): void
    {
        $this->equipe2 = $equipe2;
    }

    public function setScore1(int $score1): void
    {
        $this->score1 = $score1;
    }

    public function setScore2(int $score2): void
    {
        $this->score2 = $score2;
    }

    public function donneTexte(): string
    {
        return "Match : ".$this->getEquipe1()." ".$this->getScore1()." - ".$this->getScore2()." ".$this->getEquipe2();
    }

}