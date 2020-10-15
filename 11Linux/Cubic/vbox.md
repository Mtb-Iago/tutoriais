# Testando a ISO gerada pelo Cubic

## Criando uma máquina virtual (VM) com o VirtualBox

Criei com 2 GB de RAM e 20 GB de disco (criei com 10 e recebi o aviso de que precisa de 16.1)

Para ficar confortável é bom usar 4GB de RAM.

## Live Sistema

- Esta ISO gerada é um live sistema do Mint 20.
- Use o Gravador de imagem USB do Mint para gravar a ISO num pendrive
- Podemos usar como Live ou instalador.
- Dar o boot com ele
- Não aparece um ícone para instalação no desktop como o Mint original, mas quando ele concluir o boot e o desktop estiver pronto clicar no menu e digitar "inst".
- Então clicar em "Install Linux Mint" e tecle Enter
- Agora siga os passos normais para uma instalação do Mint
- Após reiniciar, faça login

## Verificando os softwares instalados

Após reiniciar e já abrir o sistema instalado com a ISO remasterizada com o cubic ...

### Abrir o Firefox com

http://localhost

Apache rodando, OK.

### Abrir terminal e verificar

- php -v (OK)
- mysql --version (OK)
- apache2 -v (OK)
- mc - OK

- A remasterização trouxe os aliases no .bashrc e estão funcionando
- Também trouxe os scripts copiados para /usr/local/bin
- Trouxe as pastas e arquivo copiadas para o /etc/skell agora no desktop
- O composer tá funcionando.
- Trouxe quase tudo o mais que instalei no chroot

### Clicar no menu iniciar do Mint

Verifique os itens abaixo e se faltar algum e quizer, instale

- GitHub Desktop (OK)
- Chrome (Não)
- VSCode (Não)
- Warpinator (OK) - compartilhamento de arquivos na rede local
- Kolourpaint (OK)
- Dia (Não) - cria diagramas
- FileZilla (Não)
- Skype (OK)
- guvcview (OK) - Grava filme e foto com a webcam
- Cubic (OK)
- GParted (Não) - Ótimo software para formatar, particionar e redimensionar partições em diversos formatos
- VirtualBox (OK)
- AnyDesk (OK) - similar ao Teamviewer
- Agenda e já na barra de tarefas
- VokoScreen OK - Grvação do desktop
- Peek (OK) - Gifs animados
- SearchMonkey (OK) - Busca pelo conteúdo de arquivos textos. Entre com uma string e um diretório e ele busca recursivamente
- Shutter (OK) - Melhor software que conheço para captura de telas
- Typora (OK) - ótimo editor de markdown. Ctrl+1 converte para H1, Ctrl+2 para H2, etc. Várias outras boas características

Os da relação que não estavam instalados, instalei e a maioria trouxe suas configurações do desktop.

- Impressora (Não veio, mas o Mint automaticamente detecta boa parte das impressoras populares)
- Scanner (OK)

### Outras verificações

- Favoritos do Firefox e do Chrome vieram, inclusive logados no Google
- Histórico dos navegadores
- VSCode, depois de instalado, traz as extensões do desktop
- A configuração do relógio foi trazida do desktop. Gosto de exibir também a data

## Como remover o chaveiro

Para evitar que o Chrome faça solicitação de senha extra

sudo apt remove --purge gnome-keyring

Abra novamente o Chrome
Quando pedir a senha do chaveiro clique em Continue e Continue novamente.

## Configurações da VM no Virtualbox após instalar

### Compartilhar área de transferência
- Dispositivos (acima)
- Área de transferência compartilhada
- Bidirecional

Agora podemos copiar texto no desktop com Ctrl+c e colar na VM com Ctrl+V e vice-versa.

### Instalar adicionais
- Dispositivos
- Inserir imagem de CD
- Executar
- Ao terminar tecle Enter

Reboot na VM

