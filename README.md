## 62进制转换


```bash
$fuck = new Sixtwo();
$number = mt_rand(1,9999999999);
echo '原数：'.$number.'<br>';
$str = $fuck->int2str($number);
echo '字符：'.$str.'<br>';
$number1 = $fuck->str2int($str);
echo '还原：'.$number1.'<br>';
```


