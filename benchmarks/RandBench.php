<?php

/**
 * @Revs(1000)
 * @Iterations(10)
 */
class RandBench
{
    public function benchRand()
    {
       $val = rand(1, 4);
    }

    public function benchMtRand()
    {
       $val = mt_rand(1, 4);
    }
}
