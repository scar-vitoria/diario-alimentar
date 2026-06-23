Para inicializar o sistema instale o composer na pasta raiz do projeto:
composer install

Verifique se você tem o node instalado
node -v

Dentro da pasta do projeto instale o node
npm install

Após a instalação do composer, crie a pasta do banco de dados no phpMyAdmin, caminho: http://localhost/phpmyadmin

Criar migration	php artisan 
php artisan make:migration nome_da_migration

Rodar todas as migrations	
php artisan migrate

Desfazer a última migration
php artisan migrate:rollback

Refazer todas as migrations	
php artisan migrate:fresh

Ver status das migrations
php artisan migrate:status

Comandos utilizados para a criação da autenticação no Laravel
    php artisan jetstream:install livewire
    composer require laravel/jetstream
    php artisan migrate
    npm install


(app/Providers/RouteServiceProvider.php): é responsável mudar a rota de redirecionamento do login/cadastro do usuário 

isNotEmpty() verifica se a relação tem registros