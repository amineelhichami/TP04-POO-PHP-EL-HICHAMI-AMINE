- [ ] **0.3**  Non, `$v1` et `$v2` partagent pas la même valeur de `$marque`. Car l'utilisation de `$this` a fait attribuer chacune des deux valeurs de `$marque` a son propre objet.


- [ ] **Experimentation**  : `echo $p->cin;` et `echo $p->dateNaissance;` affiche une erreur fatal, et les deux attributs ne sont pas accessible car ils sont prives.
- [ ] **Experimentation**  : `echo $p->getAge();` affiche une erreur fatal car la methode `getAge()` est une methode privee.

- [ ] **1.1** Toujours une erreur se leve lorsqu'on essaye d'acceder a un attribut ou une methode privee.La ligne qui provoque l'erreur fatal est la ligne qui contient les attributs ou les methodes inaccessibles.
- [ ] **1.2** `cin` est une donnee sensible, donc il est obligatoire de ne pas la laisser `public` et la rendre `private`
- [ ] **1.3** `getAge()` est privée : est-elle donc inutile ? Comment pourrait-elle être utilisée par une autre méthode de la classe ? *(gardez cette idée pour la Partie 4)*
- [ ] **1.4** Non, le comportement de `cin`ne change pas meme si on change la visibilité en `protected`. Elle reste toujours un attribut inaccessible depuis l'extérieur.