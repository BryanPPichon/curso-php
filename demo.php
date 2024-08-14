<?php
    $name = "Bryan";
    $isDev = true;
    $age = 18;

    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

    $output = "Hola $name, con una edad de $age. 😍";

    $outputAge = match(true) {
        $age < 2 => "Eres un bebé, $name 👶",
        $age < 10 => "Eres un niño, $name 👦",
        $age < 18 => "Eres un adolescente, $name 👨‍🎓",
        $age === 18 => "Eres mayor de edad, $name 👨‍🎓",
        $age < 30 => "Eres un adulto joven, $name 👨‍💼",
        default => "Eres un adulto, $name 👴",
    };

    $bestLanguages = ["PHP", "JavaScript", "Python", "Java"];
    $bestLanguages[] = "C#";
    $bestLanguages[] = "TypeScript";

    $person = [
        "name" => "Bryan",
        "age" => 18,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python", "Java"],
    ];

    $person["name"] = "Bryan Solares";
    $person["languages"][] = "TypeScript";

?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<h3>
    El mejor lenguaje es <?= $bestLanguages[0] ?>
</h3>

<h2><?= $outputAge ?></h2>

<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200">
<h1>
    <?= $output ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>