# Template de Projeto PHP

HelloWorld, esse é o repositório do template para projetos com PHP e TypeScript.

## Como usar
 1. Copie os arquivos do repositório ou ***git clone***
 2. No arquivo **config.php**, altere as constantes: 
 - **PROJECT_URL:** URL do projeto (ex: http://localhost/pizzariaweb2)
 - **PROJECT_NAME:** Nome do Projeto (ex: *Pizzaria Web 2*)
 - **PROJECT_VERSION:** Versão do Projeto (ex: *1.01.1001-alpha1*)
 - **PROJECT_ROOT**: Caminho do seu projeto (ex: */pizzariaweb2*)
3. Altere o constante ***DATA_LAYER_CONFIG*** de acordo com os parâmetros de conexão com seu DB. Leia mais em [CoffeeCode DataLayer](https://github.com/robsonvleite/datalayer). 
4. No terminal, execute os comandos "*composer --no-platform-reqs install*" e "*npm install*" para instalar as dependências do PHP e do JS/TS.
5. Abra o projeto no navegador, caso seja exibido a tela de login, ocorreu tudo corretamente. (Obs: *A tela não funciona porque não foi implementada a função de login*)
### Info. Adicionais
Lista dos componentes que vem junto com o Template:
 - Composer com os dependências DataLayer (abstração do BD) e Router (rotas da aplicação) by CoffeeCode.
 - NodeJS NPM com as dependências Webpack/Webpack CLI, Babel, TypeScript e Jquery. 