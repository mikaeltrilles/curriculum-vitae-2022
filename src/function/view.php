<?php
function setContent($string1, $string2, $string3, $string4, $string5, $string6, $string7,$string8,$string9)
{
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
      case 'accueil':
        echo $string1;
        break;
      case 'profil':
        echo $string2;
        break;
      case 'competence':
        echo $string3;
        break;
      case 'formation':
        echo $string4;
        break;
      case 'experience':
        echo $string5;
        break;
      case 'portfolio':
        echo $string6;
        break;
      case 'contact':
        echo $string7;
        break;
      case 'morpion':
        echo $string8;
        break;
        case 'meteo':
        echo $string9;
        break;
      default:
        echo $string1;
        break;
    }
    } else {
        echo $string1;
    }
}
