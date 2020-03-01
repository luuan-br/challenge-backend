#Para comecar
<br /><br />
instale as dependecias do componser<br />
 -> composer install<br />
 -> renomei o arquivo .env.example para apenas .env<br />
 -> execulte: php artisan key:generate<br />
 -> crie a tabela "challenge" no seu banco de dados(mysql) local<br />
 -> altera a senha e user para conforme seu banco local no arquivo .env
<br /><br />
#execulte<br />
 -> php artisan migrate<br />
 -> php artisan db:seed --class=LocaleSeeder<br />
 -> php artisan db:seed --class=WeatherSeeder<br />
 -> php artisan serve<br />
