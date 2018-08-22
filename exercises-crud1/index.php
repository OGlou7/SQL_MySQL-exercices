<!-- Exercice 1
Afficher tous les clients. -->
SELECT * FROM clients LIMIT 0,25 ;

<!-- Exercice 2
Afficher tous les types de spectacles possibles. -->
SELECT * FROM showtypes ;

<!-- Exercice 3
Afficher les 20 premiers clients. -->

SELECT * FROM clients LIMIT 0,20 ;

<!-- Exercice 4
N'afficher que les clients possédant une carte de fidélité. -->

Exercice 5
Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".

Les afficher comme ceci :

Nom : *Nom du client*
Prénom : *Prénom du client*
Trier les noms par ordre alphabétique.

Exercice 6
Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.

Exercice 7
Afficher tous les clients comme ceci :

Nom : *Nom de famille du client*
Prénom : *Prénom du client*
Date de naissance : *Date de naissance du client*
Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*
Numéro de carte : *Numéro de la carte fidélité du client s'il en possède une.*
