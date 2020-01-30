//აქ განვიხილავთ ხშირად გამოყენებულ ფუნქციებს სტინგის მანიპულაციისთვის.

// strlen() ფუნქცია რომელიც აბრუნებს სტრინგის სიგრძეს/ზომას
<?php
echo strlen('Hello World!'); // >>> 12
?>

// str_word_count() ითვლის სიტყვებს სფეისის(გამოტოვების) მიხედვით

<?php
echo str_word_count("Hello world!"); // გამოიტანს 2 ს
?>

// strrev() შეაბრუნებს ანუ უკუღმა დაწერს ტექსტს/სტრინგს

<?php
// ctype_upper() & ctype_lower() 
// სტრინგის ფუნქციები, თუ სტრინგი დიდი ასოებითაა ან პატარა ასოებითაა გამოიტანოს TRUE თუ არადა FALSE

if (ctype_upper('A') == TRUE) {
  echo 'works its upper';
}

if (ctype_lower('A') == TRUE) {
  echo 'works its lower';
}


?>
