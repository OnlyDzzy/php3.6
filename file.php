<?php
//1. Конкатенация строк:

$war1 = "Первое слово ";
$war2 = "СЪЕЛА корова.";
echo $war1.$war2."\n";

//2. Изменение регистра:
$war23 = strtoupper("first word, ");
$war43 = strtolower("EATEN BY A  COW.");
echo $war23.$war43."\n";

//3. Сравнение строк:

$aws = "Ward";
$asw = "ward";
$asq = $aws == $asw;
$saq = $aws === $asw;
if($saq == 0){
    echo "Они не равны из-за разного регистра"."\n";
};
if($saq == 1){
    echo" они равны с  разноным регистром"."\n";
};
if (strcasecmp($aws , $asw) == 0) {
    echo ' $asw равна переменной $aws без учёта регистра'."\n";
};
//4. Поиск подстроки:

$warq = "Какое-то длинное предложение состоящее из разных слов которое я на ходу придумал";
$word = "я";
 $where = strpos($warq,$word);
echo $where."\n";

//5. Замена подстроки:
$zamena =", а эти слова я уже заменил ";
$pomenal= "я на ходу придумал";
$newpred = str_replace($pomenal,$zamena,$warq);
echo $newpred."\n";

//6. Форматирование строки:

$nezr= "У %s рыбки есть %d желания";
$num = 3;
$kakoy = "Золотой";
echo sprintf($nezr,$kakoy,$num)."\n";

//7. Разделение строки:

$srtoka = "Данная строка разбита пробелами между словами.";
$slova = explode(" ",$srtoka,);
foreach($slova as $saske){
    echo "$saske"."\n";
};
$nuks=["10.12.2024","какая то дата"];
$obshaua= implode("-",$nuks);
echo $obshaua."\n" ;

//8. Работа с многострочным текстом:

$o4er = "какой то текст\n Приведенный в HTML разметку\n неводомой магией.\n";
$kakto = nl2br($o4er);
echo $kakto;

//Уровень 2: Усложненный
//Задачи:
//1. Сложная конкатенация строк:

$sa = 1;
$as = 2;
echo"один ".$sa." два ".$as."\n";

//2. Изменение регистра с условиями:

$let = strtolower($war43);
$sda= ucwords($let) ;
echo $sda."\n";

//3. Сравнение строк с учётом регистра и без:

$aws = "Ward";
$asw = "ward";
$asq = $aws == $asw;
$saq = $aws === $asw;
if($saq == 0){
    echo "Они не равны из-за разного регистра"."\n";
};
if($saq == 1){
    echo" они равны с  разноным регистром"."\n";
};
if (strcasecmp($aws , $asw) == 0) {
    echo ' $asw равна переменной $aws без учёта регистра'."\n";
};

//4. Замена подстроки с использованием массива:
$texts= "какой то текст с английскими названиями фруктов apple waterlemon berry";
$fruits= ["apple","waterlemon","berry"];
$menyau= ["banana","pomello","grape"];
$newtext= str_replace($fruits,$menyau,$texts);
echo $newtext."\n";

//5. Форматирование строки с числом:

$nezr= "У %s рыбки есть %d желания";
$num = 3;
$kakoy = "Золотой";
echo sprintf($nezr,$kakoy,$num)."\n";

//6. Разделение и объединение сложной строки:

$nums = "1,2,3,4,5";
$rew= explode(",",$nums);
foreach($rew as $key=>$balue){
    echo "индекс $key => $balue,"."\n";
};
$asw= array_sum($rew);
echo $asw;

//7. Создание случайной строки:
$randon="asaqrwgjk2582169";
function Fullransom($inp,$lenght){
$randomsstring= "";
for($i=0;$i<$lenght;$i++)
{
    $index=rand(0,strlen($inp)-1);
    $randomsstring.=$inp[$index];
}return $randomsstring;
};
echo Fullransom($randon,20)."\n";

//8. Проверка строки на палиндром:

$rewerb = "aргентина манит негра";
function palind($ints){
$normal= strtolower(preg_replace("/[^A-Za-z0-9]/",'',$ints));
$rewer= strrev($normal);
return $normal=== $rewer;
};

if(palind($rewerb)){
    echo "Это палиндром";
}else echo "Это не палиндром";


