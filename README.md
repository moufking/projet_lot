**Génération de Lot**

J'ai utilisé la fonction `mt_rand(1, 100)` pour générer un nombre aléatoire entre 1 et 100. Cette fonction renvoie un entier aléatoire.

Ensuite, j'ai utilisé une série de conditions pour déterminer le lot gagné en fonction du nombre aléatoire généré :

Si le nombre aléatoire est inférieur ou égal à 1, cela signifie qu'il est compris entre 1 et 1 inclus. Dans ce cas, la probabilité est de 1% et le lot attribué est une Tesla.

Si le nombre aléatoire est supérieur à 1 mais inférieur ou égal à 10, cela signifie qu'il est compris entre 2 et 10 inclus. Dans ce cas, la probabilité est de 9% et le lot attribué est un weekend à la montagne.

Si le nombre aléatoire est supérieur à 10 mais inférieur ou égal à 20, cela signifie qu'il est compris entre 11 et 20 inclus. Dans ce cas, la probabilité est de 10% et le lot attribué est une PS5.

Si le nombre aléatoire est supérieur à 20 mais inférieur ou égal à 50, cela signifie qu'il est compris entre 21 et 50 inclus. Dans ce cas, la probabilité est de 30% et le lot attribué est un PC Gamer.

Si le nombre aléatoire est supérieur à 50, cela signifie qu'il est compris entre 51 et 100 inclus. Dans ce cas, la probabilité est de 50% et le lot attribué est un jeu de cartes.

**Verification du mail**

Etant que le  champ email doit être soumis à validation (obligatoire, format, longueur) + 1 adresse email = 1 participation unique.

J'ai utiliser le code suivant pour vérifier si l'email est valide ou non :

```$validatedData = $request->validate([
            'email' => 'required|email|unique:participations,email',
        ]);
```

Il me permet de vérifier si l'email est valide ou non, si l'email est unique ou non et si l'email est obligatoire ou non.
