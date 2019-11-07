Projet Slam-Quizz
===
Initialization
---

`git clone https://github.com/AugustinDmrt/Slam-Quizz.git`


Instalation
---

`cd Slam-Quizz`

`composer install`
	
Examples
----

![Example of the index page ](assests/screenshot_home.JPG)

Config
---

1.Rename .env in .env.local

2.Search in .env.locale and replace :

DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

Replace in the line by :

db_user :"Your database users"

db_password :"Your database password"

db_name :"Your database name"

3.In src -> DataFixtures -> UserFixtures.php
Change the user as you want 
Exemple : 
$user=new User();
$user->setEmail("email of the users");        
$user->setPassword('the password of the user');
$user->setRoles(['ROLE_USER']);
$manager->persist($user);

4.In prompt in Slam-Quiz Do
`php bin/console doctrine:fixtures:load`
Enter yes


See the result
---

`php bin/console server:run`

Open explorer and tapes on url localhost:8000




	
