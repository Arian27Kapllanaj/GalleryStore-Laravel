<h1>Gallery Store</h1>

Gallery Store created with Laravel 6

How to use:

1. Git Clone this project in XAMPP/htdocs
2. cd to the project's folder
3. Run the command in Git Bash:composer update
4. Open XAMPP phpmyadmin. Create a database and a user with access rights on this database
5. Create a file named ".env" and copy the code below. Also put your database name, username that you gave full access rights, and username's password.

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:l1j1VxBO6qiUb0ApX/YvVPYxH1a4f+RXo/PBGSh/mV8=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[Database Name Here]
DB_USERNAME=[Username Here]
DB_PASSWORD=[Username's password]

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

6. Run the command in Git Bash: php artisan migrate
7. Run the command in Git Bash: php artisan key:generate