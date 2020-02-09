//switch სთეითმენთი თითქმის იგივე როგორც if-elseif-else
//თუ switch ის პარამეტრი დაემთხვა case ის რომელიმე პარამეტრს გამოიტანს იმას თუ არცერთი დაემთხვა გამოიტანს default ის პარამეტრს
// break; ის გამოყენება იმისთვისაა საჭირო რომ არ განხორციელდეს სხვა დამატებითი ოპერაცია. 
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
