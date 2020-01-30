// სულ პირველად გვჭირდება ვებ ჰოსტი php და mysql მხარდაჭერით ან დავაყენოთ ვებ სერვერის სერვისი საკუთარ კომპიუტერზე
// PHP სკრიპტი იწყება <?php და მთავრდება ?>

<?php
echo "php code goes here";
?>

// php გაფართოება არის .php
// php ში კოდის ბოლოს აუცილებლად იწერება ; (სემიქოლონი)

// php კოდი ჩვეულებრივ მოიცავს HTML, ანუ ჰტმლ ში შედის პჰპ კოდი.

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>


// PHP Case Sensitivity
// პიეჩპიში ქეივორდები,კლასები,ფუნქციები და ა.შ არ არის მგრძნობიარე გარდა ცვლადებისა. 

<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html>

