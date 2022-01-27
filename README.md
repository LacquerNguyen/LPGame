# Local Settings

## dotenv

Please copy from `.env.example` to `.env` and set your parameter.

```Terminal
$ cp .env.example .env
$ vi .env
```

## Docker-Compose WordPress

Docker-Compose（Docker コンテナの複合構成）を利用した環境構築をしています。
Docker for Mac または Docker for Windows をインストールして開発環境の立ち上げをお願いします。
Mac の方はターミナルから、Windows の方は相応のコマンドラインインターフェースを使って操作してください。
(Docker 社の社員さんが作った[DockerUI]<https://github.com/kevana/ui-for-docker>というツールもあるらしい。)

You can use Docker Compose to easily run WordPress in an isolated environment built with Docker containers. This quick-start guide demonstrates how to use Compose to set up and run WordPress. Before starting, you’ll need to have [Compose installed]<https://docs.docker.com/compose/install/>.

To get started, check out <https://docs.docker.com/compose/wordpress/#define-the-project>

If you work on Mac, you will use terminal app.
If you on Windows, you will install a some CLI tool. (ex. Power shell, Git Bash)

## Run Docker

1. Run `docker-compose up -d`.
   (Option `-d` : run docker daemon)

Docker コンテナのリストを確認できます。
You can check the docker containers list.

```Terminal
$ docker ps

CONTAINER ID        IMAGE               COMMAND                  CREATED                  STATUS              PORTS                  NAMES
8b1cc6ed73dc        wordpress:latest    "docker-entrypoint.s…"   Less than a second ago   Up 12 seconds       0.0.0.0:8888->80/tcp   startup-web
89c4e6ae3878        mysql:latest        "docker-entrypoint.s…"   Less than a second ago   Up 15 seconds       3306/tcp               startup-db
```

下記の URL でアクセスできます。
You can accsss to
<http://localhost:8878>

## Stop Docker

1. Stop Docker-compose `docker-compose down`.
1. The command `docker-compose down --volumes` removes the containers, default network, and the Wordpress database.

## Docker Compose Configuration

1. Edit `docker-compose.yml`
1. Stop Docker-compose `docker-compose down`.
1. Run `docker-compose up -d`.

## Backup Local Database

1. Run bash file `/bin/sh backup-db.sh` on project root
1. Enter password `#{DB_PASSWORD}`

## bash on Docker container

You can use project name for search docker container ID.
The project name is written on `docker-compose.yml`

1. Run `docker exec -it $(docker-compose --project-name percent ps -q wordpress) /bin/bash`
   (`percent` is PROJECT NAME written on `docker-compose.yml`)

## Command on Docker container

1. Run `docker exec -it $(docker-compose --project-name percent ps -q wordpress) sh -c 'ANY COMMAND'`
   (`percent` is PROJECT NAME written on `docker-compose.yml`)

# Task-Runner Settings

## Run gulp

Gulp works in This Project.
If you use Task-Runner, please run this code below at this project folder.

```Terminal
$ npm install ( -> It will create node_modules Dir)
$ gulp
```

or

```Terminal
$ yarn install
$ gulp
```

Please check `package.json`, is istalled `node.js`, is instaled `gulp (npm)` on global.

## gulp Task-Runner

If you know gulp-tasks, please Check `gulpfile.js`

- gulp-sass
- gulp-autoprefixer
- gulp-uglify
  ... etc.

# Style Lint

## Style Lint for css/scss

This Project use pretter-stylelint.
Please check `.stylelintrc.json` file on project root.

Used node package

```
- prettier-stylelint
- stylelint-config-rational-order
```

https://qiita.com/tkiryu/items/016aa9ef8a25b631e7e6

If you use VS Code editor, Please check and install this extention.
and Please set to `true` this parameter `prettier.stylelintIntegration`.
[Prettier - Code formatter](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)

# Deployment

## deployer Configuration

Deployer is used as deploy tool.
It is in `deploy` Dir.

Configuration file is `host.yml`.
If you want deploy another environment, you can use `host.yml.example`.

The deploy setting file is `deploy/deploy.php`

## Run deployer

The list command lists all commands

```Terminal
$ php deploy/deployer.phar list
```

The deploy command is below on any environment(host.yml).
It is necessary you can conect server via SSH.

Deployer will usually use some git repository.
You should push your codes to a target Git repository.

```Terminal
$ git push #{remote}
$ php deploy/deployer.phar -f=deploy/deploy.php deploy #{stage(host.yml)}
```
