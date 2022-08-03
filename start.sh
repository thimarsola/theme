#!/bin/bash

clear
echo ""
echo "---------- >>> Start Project Config <<< ----------"
echo ""
echo "Start project ..."
echo ""

sudo rm -r .git

echo ""
git init
npm install
npx husky install
chmod a+x .husky/commit-msg
echo ""
git flow init

echo ""
composer update

echo ""
mv source/Config-example.php source/Config.php

echo ""
printf "Digite o nome do pacote: "
read packageName
sed -i 's/package-name/'$packageName'/g' package.json

echo ""
printf "Digite o nome do projeto: "
read projetName
sed -i 's/project-name/'$projetName'/g' package.json
sed -i 's/project-name/'$projetName'/g' composer.json
sed -i 's/project-name/'$projetName'/g' README.md
sed -i 's/project-name/'$projetName'/g' style.css

echo ""
printf "Digite o nome do repositório no Github: "
read repoName
sed -i 's/repo-name/'$repoName'/g' package.json

echo ""
printf "Digite o dominio do projeto: "
read domain
sed -i 's/domain/'$domain'/g' package.json

echo ""
echo "---------- >>> Finish Config <<< ----------"