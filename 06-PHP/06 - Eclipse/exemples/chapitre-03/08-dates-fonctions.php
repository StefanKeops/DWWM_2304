<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Manipuler les dates</title>
    <style>
      h1 { font-family: "Courier New",Courier,monospace ; font-size: 100% ; margin-top: 20pt }
    </style>
  </head>
  <body>
    <div>
    
    <h1>checkdate()</h1>
    <?php
    $jour = 26; $mois = 8 ; $année = 1966;
    echo "$jour/$mois/$année => ",
          var_dump(checkdate($mois,$jour,$année)),'<br />';
    $jour = 29; $mois = 2 ; $année = 2000;
    echo "$jour/$mois/$année => ",
          var_dump(checkdate($mois,$jour,$année)),'<br />';
    $jour = 29; $mois = 2 ; $année = 2001;
    echo "$jour/$mois/$année => ",
          var_dump(checkdate($mois,$jour,$année)),'<br />';
    ?>
    
    <h1>date()</h1>
    <?php
    // sans deuxième paramètre = utilisation du timestamp courant
    echo 'Date au format JJ/MM/AAAA : ', date('d/m/Y'),'<br />'; 
    echo 'Heure : ', date('H:i:s'),'<br />'; 
    echo 'Unix a fêté sa milliardième seconde le ',
          date('d/m/Y à H:i:s',1000000000),'<br />'; 
    ?>

    <h1>strftime() // Les erreurs de niveau E_DEPRECATED ne sont pas affichées.</h1>
    <?php
    // @strftime pour ne pas afficher les erreurs (notamment les erreurs
    // de niveau E_DEPRECATED)
    echo 'Date/Heure : ',
          @strftime('%d/%m/%Y - %H:%M:%S '),'<br />'; 
    setlocale(LC_ALL,'fr_FR.UTF8');
    echo 'Format long (français) : ',
          @strftime('%A %d %B %Y'),'<br />'; 
    setlocale(LC_ALL,'en_US');
    echo 'Format long (anglais) : ',
          @strftime('%A %d %B %Y'),'<br />'; 
    ?>

    <h1>datefmt_create() - datefmt_format()</h1>
    <?php
    $format = datefmt_create('fr_FR',IntlDateFormatter::FULL, IntlDateFormatter::FULL,
                             'Europe/Paris', IntlDateFormatter::GREGORIAN  );
    echo '<b>FULL/FULL :</b><br/>',datefmt_format($format,time()),'<br/>';
    $format = datefmt_create('fr_FR',IntlDateFormatter::FULL,IntlDateFormatter::LONG);
    echo '<b>FULL/LONG :</b><br/>',datefmt_format($format,time()),'<br/>';
    $format = datefmt_create('fr_FR',IntlDateFormatter::LONG,IntlDateFormatter::NONE);
    echo '<b>LONG/NONE :</b><br/>',datefmt_format($format,time()),'<br/>';
    $format = datefmt_create('fr_FR',IntlDateFormatter::SHORT,IntlDateFormatter::NONE);
    echo '<b>SHORT/NONE :</b><br/>',datefmt_format($format,time()),'<br/>';
    ?>

    <h1>datefmt_create() - datefmt_format()</h1>
    <?php
    $format = datefmt_create(locale:'fr_FR',pattern:'dd/MM/yyyy - HH:mm:ss');
    echo 'Date/Heure : ',datefmt_format($format,time()),'<br/>';
    $format = datefmt_create(locale:'fr_FR',pattern:'EEEE dd LLLL yyyy');
    echo 'Format long (français) : ',datefmt_format($format,time()),'<br/>';
    $format = datefmt_create(locale:'en_GB',pattern:'EEEE dd LLLL yyyy');
    echo 'Format long (anglais) : ',datefmt_format($format,time()),'<br/>';
    ?>

    <h1>getdate()</h1>
    <?php
    $date = getdate(); // maintenant
    foreach($date as $clé => $valeur) {
      echo "$clé => $valeur<br />";
    }
    ?>
    
    <h1>date_parse_from_format()</h1>
    <?php
    $date = date_parse_from_format('d/m/Y','26/08/1966');
    foreach($date as $clé => $valeur) {
      echo "$clé => ",is_array($valeur)?'Array':$valeur,"<br />";
    }
    ?>

    <h1>time()</h1>
    <?php
    $ts = time();
    echo "timestamp Unix actuel = $ts";
    ?>
    
    <h1>mktime()</h1>
    <?php
    $ts = mktime(0,0,0,8,26,1966);
    echo 'mktime(0,0,0,8,26,1966) = ',
          date('d/m/Y - H:i:s',$ts),'<br />';
    $ts = mktime(0,0,0,8,26+20000,1966);
    echo '20000 jours après le 26/08/1966 = ',
          date('d/m/Y',$ts),'<br />';
    ?>
    
    <h1>microtime()</h1>
    <?php
    // Affichage de microtime sous la forme d'une chaîne.
    echo microtime().'<br />';
    // Affichage de microtime sous la forme d'un réel.
    echo microtime(TRUE).'<br />';
    // Pour ne conserver que les micosecondes, le plus
    // simple est de transformer la chaîne en réel.
    echo (float) microtime().'<br />';
    ?>
    
    <h1>hrtime()</h1>
    <?php
    // Affichage de hrtime sous la forme d'un tableau. 
    [$secondes,$nanosecondes] = hrtime();
    echo "[$secondes,$nanosecondes]",'<br />';
    // Affichage de hrtime sous la forme d'un nombre. 
    echo hrtime(TRUE),'<br />';
    // Calculer la durée d'un traitement.     
    $t = hrtime(TRUE);
    for ($i = 1,$total = 0 ; $i <= 1e7 ; $total += $i++);
    $durée = hrtime(TRUE) - $t;
    echo 'Durée : ',round($durée/100000),' ms <br />';
    ?>

    <h1>idate()</h1>
    <?php
    // Affichage de la date/heure courante pour contrôle
    echo date('d/m/Y - H:i:s'),'<br />'; 
    // Extraction de différentes composantes
    $composantes = str_split('YmdHistwW');
    foreach($composantes as $composante) {
      echo "$composante = ",idate($composante),'<BR>';
    }
    ?>
            
    </div>
  </body>
</html>