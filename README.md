laravel-auth
===

//prima parte

Incominciamo ad impostare il progetto che ci accompagnerà fino alla fine del corso.  
Separare l’ambiente dei controller, delle rotte e delle view per tutta quella che sarà la dashboard.  
Il progetto sarà la gestione del vostro portfolio e le tabelle saranno quindi: projects, tecnologies e types (che più avanti metteremo in relazione).  
Iniziate  a organizzare il progetto e il database.  
Ecco lo snippet di codice per il raggruppamento delle rotte  
Route::name('admin.')  
    ->prefix('admin')  
    ->group(function(){  
        // mie rotte admin  
});  
Steps:
- Creazione db
- Creazione delle migration e (facoltativo) seeder
- organizzazione delle rotte (sia dashboard che reources) e dei controller admin
- organizzazione delle view admin
- lavorare sulla CRUD dei progetti


//seconda parte


Ricreare, nella repo precedente (rifatta), la struttura admin che abbiao fatto stamattina e da lì continuate:  
riprendete le migration e i seeder fatti ieri e lanciateli
ricopiate anche i controller e sistemate le nuove rotte
innestate le view di ieri nella struttura iniziata oggi  
Arrivate almeno fino alla visualizzazione della lista dei progetti nelle rotte admin.  
Se per esercizio volete rifare tutto daccapo i passaggi sono i seguenti:


Creare un nuovo progetto Laravel 10 (composer create-project laravel/laravel mio-progetto)  
entrare nella cartella del progetto creato (cd mio-progetto) e lanciare da terminale i seguenti comandi:  
- composer require laravel/breeze --dev  
- php artisan breeze:install  
- composer require pacificdev/laravel_9_preset  
- php artisan preset:ui bootstrap --auth  
- rinominare vite.config.js in vite.config.cjs  
- npm i && npm run dev  
