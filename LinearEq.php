<?php
namespace specialepic;
class LinearEq 
	{
    /**
     * @var float|int
     */
    protected $x;
    function solvel($a, $b, $c)
		{
			//aX+b=0
			//x=-b/a
			if ($a==0) 
			{
				throw new RzekaMansur_Exception("Equation does not exist", 1);
			}
			$x=(-1*$b)/$a;
			$this->x=$x;
            Log::log("Linear equation ({$a}x+{$b}) root: {$x}");
			return $x;
		}
	}