function tri_rapide(tableau_a_trier) {
    if(tableau_a_trier.length <=1) {
        return tableau_a_trier;
    }
    else {

        let pivot = tableau_a_trier[tableau_a_trier.length-1]

        let tab_plus_petites_valeurs = []

        for(let i=0; i<tableau_a_trier.length;i++) {
            if(tableau_a_trier[i] < pivot) {
                tab_plus_petites_valeurs.push(tableau_a_trier[i])
            }

        }

        let tab_plus_grandes_valeurs = []

        for(let i=0; i<tableau_a_trier.length-1;i++) {
            if(tableau_a_trier[i] >= pivot) {
                tab_plus_grandes_valeurs.push(tableau_a_trier[i])
            }

        }

        return [].concat(tri_rapide(tab_plus_petites_valeurs),
            [pivot],tri_rapide(tab_plus_grandes_valeurs))
    }

}

console.log(tri_rapide([ 2000, 1998, 2005, 2016, 2005, 2003, 2020, 1992, 2005]))
