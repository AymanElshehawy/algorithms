<?php


class union
{
    private $id =[];

    /**
     * set n numbers with same values
     * @param int $n
     */
    public function quickFindUF(int $n)
    {
        for ($i=0; $i<$n; $i++){
            $this->id[$i] = $i;
        }
    }

    /**
     * @param int $p
     * @param int $q
     * @return bool
     */
    public function connected(int $p, int $q): bool
    {
        return $this->id[$p] == $this->id[$q];
    }

    public function setUnion(int $p, int $q)
    {
        $pid = $this->id[$p];
        $qid = $this->id[$q];
        for ($i=0; $i<count($this->id); $i++){
            if ($this->id[$i] == $pid) $this->id[$i] = $qid;
        }
    }

    public function getAll()
    {
        return $this->id;
    }

    public function test(int $n)
    {
        $this->quickFindUF($n);
        $this->setUnion(0,5);
        $this->setUnion(5, 6);
        $this->setUnion(1, 2);
        $this->setUnion(2, 7);
        return $this->getAll();
    }
}