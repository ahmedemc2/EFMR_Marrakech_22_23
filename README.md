# Question 1

<p>php artisan make:model Eleve -m</p>
<p>php artisan make:model Club -m</p>
<p>php artisan make:model Activite -m</p>

# Question 3

<p>php artisan make:migration create_activite_eleve_table --create=activite_eleve</p>

# Question 4

<p>php artisan make:seeder ClubSeeder</p>
<p>php artisan make:seeder eleveSeeder</p>
<p>php artisan make:seeder ActiviteSeeder</p>

# Question 5

<p>Si tu viens de créer ou réinitialiser ta base de données, tu peux utiliser :</p>
<b>php artisan migrate --seed</b>
<p>Si tu as déjà ta base de données existe et rempli, utilise :</p>
<b>php artisan migrate:fresh --seed</b>
