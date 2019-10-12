<?php declare(strict_types=1);

namespace Pengzeng;

class Sixtwo{

	private $s = array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	public function int2str(int $int): string{
		if(!$int) return "";
		$mod = $int%62;
		$str = $mod === 0 ? $this->s[0] : $this->s[$mod];
		while ($int = floor($int/62)) {
			if ($int < 62) {
			    $str = $this->s[$int].$str;
			}else{
				$mod = $int%62;
				$str = $mod === 0 ? $this->s[0].$str : $this->s[$mod].$str;
			}
		}
		return $str;
	}


	public function str2int(string $str): int{
		if(!$str) return 0;
		$str = $str.'';
		$int = 0;
		$len = strlen($str);
		for ($i = 0; $i < $len; $i++ ) {
			$ride = array_search($str[$i],$this->s);
			if ($i == $len-1) {
			    $int += $ride;
			}else {
			    $int += pow(62,$len-$i-1)*$ride;
			}
		}
		return $int;
	}
}
