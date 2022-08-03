#!/bin/bash

clear
echo ""
echo "---------- >>> Start Project Config <<< ----------"
echo ""
echo "Start project ..."

sudo rm -r .git
git init
npm install
npx husky install
composer update

mv source/Config-example.php source/Config.php

printf "Digite o nome do projeto"
read projectName
sed 's/project-name/$projectName' package.json
sed 's/project-name/$projectName' composer.json
sed 's/project-name/$projectName' README.md
sed 's/project-name/$projectName' style.css

printf "Digite o nome do repositório no Github"
read repoName
sed 's/repo-name/$repoName' package.json

printf "Digite o dominio do projeto"
read domain
sed 's/domain/$domain' package.json

echo ""
echo "---------- >>> Finish Config <<< ----------"