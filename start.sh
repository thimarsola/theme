#!/usr/bin/env sh
sudo rm -rf .git
echo "---------- >>> Start Project Config <<< ----------"
echo " "
echo "Start project ..."
npm install
echo " "
composer update
mv source/Config-example.php source/Config.php
echo " "
echo "Digite o nome do pacote(example-name):"
printf ""
read packageName
sed -i "s/package-name/$packageName/g" package.json composer.json
echo " "
echo "Digite o nome do projeto(Name):"
printf ""
read projetName
sed -i "s/project-name/$projetName/g" package.json composer.json README.md style.css
echo " "
echo "Digite o nome do repositório no Github(Projeto-Name):"
printf ""
read repoName
sed -i "s/repo-name/$repoName/g" package.json
echo " "
gh repo create $repoName --private
echo " "
echo "Digite o dominio do projeto(domain.com.br):"
printf ""
read domain
sed -i "s/domain/$domain/g" style.css README.md
git init
git add README.md
git commit -m "KEY-0: start project"
git branch -M main
git remote add origin git@github.com:thimarsola/$repoName.git
git push -u origin main
git checkout -b develop
git add .
git commit -m "KEY-0: wip"
git checkout -b feature/KEY-01-initial-config
npm install husky --save-dev
npx husky install
dos2unix .husky/commit-msg
echo " "
echo "---------- >>> Finish Config <<< ----------"
