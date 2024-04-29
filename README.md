# UPLOAD DE ARQUIVO UTILIZANDO LIVEWIRE COM MINIO

### Setup do projeto
Clonar repositório
```sh
git clone https://github.com/carvalhojccs/livewire-file-upload-with-minio.git
```

```sh
cd livewire-file-upload-with-minio
```

Criar o arquivo .env
```sh
cp .env.example .env
```

Ajuste as configurações do .env
```sh
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

FILESYSTEM_DISK=s3

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_ENDPOINT=
AWS_BUCKET=
AWS_URL=
AWS_USE_PATH_STYLE_ENDPOINT=false
```

Rodar a instalação das dependências composer do projeto
```sh
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php83-composer:latest composer install
```

Configurar o alias do sail no ~/.bashrc
```sh
vim ~/.bashrc
```

```sh
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

Após configurar o alias, recarreguar o bashrc
```sh
source ~/.bashrc
```

Subir os containers
```sh
sail up -d
```

Gerar a chave do projeto
```sh
sail artisan key:generate
```

Rodar as migrations iniciais
```sh
sail artisan migrate
```

Rodar o npm run dev
```sh
sail npm run dev
```

Feito, projeto instalado
