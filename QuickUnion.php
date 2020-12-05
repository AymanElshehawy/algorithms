<?php


class QuickUnion
{
    private array $id =[];

    public function quickUnionUF(int $n): void
    {
        for ($i=0; $i<$n; $i++){
            $this->id[$i] = $i;
        }
    }

    private function getRoot(int $i): int
    {
        while ($i != $this->id[$i]) $i = $this->id[$i];
        return $i;
    }

    public function connected(int $p, int $q): bool
    {
        return $this->getRoot($p) == $this->getRoot($q);
    }

    public function setUnion(int $p, int $q): void
    {
        $i = $this->getRoot($p);
        $j = $this->getRoot($q);
        $this->id[$i] = $j;
    }

    public function getAll(): array
    {
        return $this->id;
    }
}