<?php

function tri_rapide($tableau_a_trier) {
    if(count($tableau_a_trier) <=1) {
        return $tableau_a_trier;
    }
    else {

        $pivot = $tableau_a_trier[count($tableau_a_trier)-1];

        $tab_plus_petites_valeurs = [];

        for($i=0; $i<count($tableau_a_trier);$i++) {
            if($tableau_a_trier[$i] < $pivot) {
                $tab_plus_petites_valeurs[] = $tableau_a_trier[$i];
            }

        }

        $tab_plus_grandes_valeurs = [];

        for($i=0; $i<count($tableau_a_trier)-1;$i++) {
            if($tableau_a_trier[$i] >= $pivot) {
                $tab_plus_grandes_valeurs[] = $tableau_a_trier[$i];
            }

        }

        return array_merge(tri_rapide($tab_plus_petites_valeurs),
            [$pivot],tri_rapide($tab_plus_grandes_valeurs));
    }

}

print_r(tri_rapide([ 2000, 1998, 2005, 2016, 2005, 2003, 2020, 1992, 2005]));
