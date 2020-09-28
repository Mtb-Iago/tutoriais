# Sincronizando repositório local com o remoto
De forma simples e quando temos apenas uma branch, a master.

Em seu desktop mantenha um repositório sincronizado com o repositório do GitHub.

```bash
git clone git@github.com:ribafs/teste.git teste
cd teste
# Criei um arquivo chamado local.txt apenas com uma string
git add .
git commit -m "Teste de sincrinização"
git pull    # Aqui avisa que já está atualizado
git push
```
Isso enviou o local.txt para o remoto

Agora eu criei um arquivo remoto.txt no repositório do GitHub e joquei uma string qualquer nele
```bash
git add .
git commit -m "Teste de sincrinização"
git pull    # Agora ele traz o arquivo remoto.txt para cá
git push    # Aqui avisa que já está atualizado
```

Removendo os arquivos local e remoto do repositório local
```bash
git add .
git commit -m "Teste de sincrinização"
git pull    # Already up to date
git push    # Aqui avisa que já está atualizado
```
Removeu também do remoto

## Checando alterações locais
Após efetuar alterações no repositório local podemos receber informações sobre elas usando o comando

git status

Então nos é sugerido usar git add para guardar as alterações. Geralmente usamos "git add ." para isso, mas podemos usar git add nomearquivo.

## Estes comandos abaixo basta a primeira vez em que executou o git
```bash
git config --global user.name "Ribamar FS"
git config --global user.email "ribafs@gmail.com"
```
## Sugestões e dicas
Caso tenha sugestões favor deixar num Issue.

## Boa referência
Ótima dica recebida do colega Eduardo Alano do grupo PHP Brasil
https://dev.to/jkvyff/reset-or-sync-local-branch-to-a-remote-repository-41c4
