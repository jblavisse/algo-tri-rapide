# fonction tri_rapide(tableau_a_trier)
def tri_rapide(tableau_a_trier):
#       Si longueur de tableau_a_trier <=1
    if len(tableau_a_trier) <=1:
#         retourner tableau_a_trier
        return tableau_a_trier
#       Sinon
    else:
#           variable pivot = dernier élément de tableau_a_trier
        pivot = tableau_a_trier[-1]

        tab_plus_petites_valeurs = []

        for element in tableau_a_trier:
            if element < pivot:
                tab_plus_petites_valeurs.append(element)


        tab_plus_grandes_valeurs = []

        for element in tableau_a_trier[:-1]:
            if element >= pivot:
                tab_plus_grandes_valeurs.append(element)



        return tri_rapide(tab_plus_petites_valeurs) + [pivot] + tri_rapide(tab_plus_grandes_valeurs)

print(tri_rapide([ 2000, 1998, 2005, 2016, 2005, 2003, 2020, 1992, 2005]))
