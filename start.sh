#!/bin/sh
echo "---------- >>> Start Project Config <<< ----------"
echo " "
echo "Start project ..."
sudo rm -rf .git;
npm install;
echo " "
composer update;
mv source/Config-example.php source/Config.php
echo " "
printf "Digite o nome do pacote(example):"
read packageName
sed -i "s/package-name/$packageName/g" package.json composer.json
echo " "
printf "Digite o nome do projeto(Project Name):"
read projetName
sed -i "s/project-name/$projetName/g" package.json composer.json README.md style.css
echo " "
printf "Digite o nome do repositÃ³rio no Github(Projeto-Project-Name):"
read repoName
sed -i "s/repo-name/$repoName/g" package.json
echo " "
gh repo create $repoName --private;
git init;
git add README.md;
git commit -m "first commit";
git branch -M main;
git remote add origin git@github.com:thimarsola/$repoName.git;
git push -u origin main;
git flow init;
echo " "
printf "Digite o dominio do projeto:"
read domain
sed -i "s/domain/$domain/g" style.css README.md
echo "---------- >>> Finish Config <<< ----------"
