<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Ma page web</title>
    </head>

    <body>
        <h1>Ma page web</h1>

        <p>Bonjour, nous sommes actuellement le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <?php
        $age_of_viewer = 27;
        $name_of_viewer = "Clément";
        $weight_of_viewer = 71.6;
        $is_viewer_human = true;
        $var_is_empty = NULL;

        echo 'Le visiteur s\'appelle ' . $name_of_viewer . ' et à ' . $age_of_viewer . ' ans';
        ?>

        <?php
        $age = 8;
        $language = 'anglais';

        if ($age <= 12 AND $language == 'français')
        {
            echo '<p>Bienvenue sur mon site</p>';
        }
        elseif ($age <= 12 AND $language == 'anglais')
        {
            echo '<p>Welcome to my website</p>';
        }
        ?>

        <?php
        $country = 'France';

        if ($country == 'France' OR $country == 'Belgique')
        {
            echo '<p>Bienvenue sur mon site</p>';
        }
        else
        {
            echo '<p>Désolé, le site n\'est pas encore disponible pour votre pays</p>';
        }
        ?>
        
        <?php
        $note = 2;

        switch ($note)
        {
            case 0:
                echo '0';
            break;

            case 10:
                echo '10';
            break;

            case 20:
                echo '20';
            break;
            
            default:
                echo 'Pas la bonne note';
        }
        ?>

        <?php
        $ageof = 24;

        $majeur = ($ageof >= 18) ? true : false;
        echo '<p> ' . $majeur . '</p>';
        ?>

        <?php
        $number_of_line = 1;

        while ($number_of_line <= 5)
        {
            echo '<p>Ceci est la ligne n°' . $number_of_line . ' dans une boucle while</p>';
            $number_of_line++;
        }

        for ($number_of_line = 1; $number_of_line <= 5; $number_of_line++)
        {
            echo '<p>Ceci est la ligne n°' . $number_of_line . ' dans une boucle for</p>';
        }

        // tableau numéroté
        $first_name = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
        echo $first_name[1];

        echo '<br />';

        // tableau associatif
        $details = array (
            'first name' => 'François',
            'last name' => 'Dupont',
            'adress' => '3 Rue du Paradis',
            'city' => 'Marseille');
        echo $details['city'];

        echo '<br />';

        for ($number = 0; $number < 5; $number++)
        {
            echo $first_name[$number] . '<br />';
        }

        foreach($first_name as $element)
        {
            echo $element . ' <br />';
        }

        foreach($details as $element)
        {
            echo $element . '<br />';
        }

        foreach($details as $key => $element)
        {
            echo '[' . $key . '] vaut ' . $element . '<br />';
        }

        echo '<br />';

        echo '<pre>';
        print_r($details);
        echo '</pre>';

        if (array_key_exists('last name', $details))
        {
            echo 'La clé "last name" se trouve dans les details !';
        }

        if (array_key_exists('country', $details))
        {
            echo 'La clé "country" se trouve dans les details !';
        }

        echo '<br />';

        $fruits = array ('Banana', 'Apple', 'Pear', 'Cherry', 'Strawberry', 'Raspberry');

        if (in_array('Blueberry', $fruits))
        {
            echo 'La valeur "Blueberry" se trouve dans les fruits !';
        }

        if(in_array('Cherry', $fruits))
        {
            echo 'La valeur "Cherry" se trouve dans les fruits !';
        }

        echo '<br />';
        
        $position = array_search('Strawberry', $fruits);
        echo '"Strawberry" se trouve en position ' . $position . '<br />';

        $position = array_search('Banana', $fruits);
        echo '"Banana" se trouve en position ' . $position;
        ?>
    </body>
</html>