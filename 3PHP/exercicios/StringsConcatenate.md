# Concatenação de Strings

```php
$b = $a . ' World'; // Hello World
$a .= ' World'; // Hello World

$firstName = 'David';
$lastName = 'Powers';
echo $firstName.$lastName; // displays DavidPowers

echo $firstName . ' ' . $lastName; // displays David Powers

Delimitar
$c = 'World';
echo "Hello $c"; // "Hello World"
echo 'Hello $c'; // "Hello $c"

Hredoc
$s = <<<LABEL
Heredoc (with parsing)
LABEL;

$s = <<<'LABEL'
Nowdoc (without parsing)
LABEL;

```
