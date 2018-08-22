-- Affiche toutes les données.
SELECT * FROM students;

-- Affiche uniquement les prénoms.
SELECT prenom FROM students;

-- Affiche les prénoms, les dates de naissance et l’école de chacun.
SELECT prenom, datenaissance, school FROM students;

-- Affiche uniquement les élèves qui sont de sexe féminin.
SELECT * FROM students WHERE genre="F";

-- Affiche uniquement les élèves qui font partie de l’école Charleroi.
SELECT * FROM students WHERE school = 2;

-- Affiche uniquement les prénoms des étudiants, par ordre inverse à l’alphabet (DESC). Ensuite, la même chose mais en limitant les résultats à 2.
SELECT prenom FROM students ORDER by prenom LIMIT 0,1;

-- Ajoute Ginette Dalor, née le 01/01/1930 et affecte-la à Bruxelles, toujours en SQL.
INSERT INTO students VALUES ('Dalor', 'Ginette', 1930-01-01, 'F', 1);

-- Modifie Ginette (toujours en SQL) et change son sexe et son prénom en “Omer”.
UPDATE students SET prenom = 'Omer',genre = 'M' WHERE id = 31;

-- Supprimer la personne dont l’ID est 3.
DELETE FROM students WHERE id = 3;

-- Modifier le contenu de la colonne School de sorte que "1" soit remplacé par "Bruxelles" et "2" soit remplacé par "Charleroi". (attention au type de la colonne !)
ALTER TABLE students
MODIFY school VARCHAR;
UPDATE students
SET school = REPLACE(school, 1, 'Bruxelles')
AND REPLACE(school, 2, 'Charleroi');

-- Faire d’autres manipulations pour voir si t’as bien compris.
