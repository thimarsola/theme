#!/usr/bin/env sh
# remove git repository
rm -rf .git
# start configuration script
echo "---------- >>> Start Project Config <<< ----------"
echo " "
echo "Start project ..."
# run npm install
npm install
echo " "
# run composer install
composer install
echo " "
# install phpcodesniffer
composer require dealerdirect/phpcodesniffer-composer-installer
echo " "
# copy config file
mv source/Config-example.php source/Config.php
echo " "
# configure repository
echo "Digite o nome do pacote(example-name):"
printf ""
read packageName
sed "s/package-name/$packageName/g" package.json composer.json
echo " "
echo "Digite o nome do projeto(Name):"
printf ""
read projetName
sed "s/project-name/$projetName/g" package.json composer.json README.md style.css
echo " "
echo "Digite o nome do repositório no Github(Projeto-Name):"
printf ""
read repoName
sed "s/repo-name/$repoName/g" package.json README.md
echo " "
gh repo create $repoName --private
echo " "
echo "Digite o dominio do projeto(domain.com.br):"
printf ""
read domain
sed "s/domain/$domain/g" style.css README.md
git init
git add README.md
git commit -m "KEY-0: start project"
git branch -M main
git remote add origin git@github.com:thimarsola/$repoName.git
git push -u origin main
git checkout -b develop
npm run dev
git add .
git commit -m "KEY-0: wip"
git checkout -b feature/KEY-01-initial-config
# install husky
npm install husky --save-dev
npx husky install
echo " "
echo "---------- >>> Finish Config <<< ----------"
