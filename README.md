## 📝Feegow Challenge

Esse é um teste focado em design de código, e conhecimento de orientação a objeto. O objetivo é avaliar a experiênica em escrever código de fácil manutenção, baixo acoplamento, e alta coesão.

### 🚀Sobre o Projeto

Este é um sistema para clínicas que consomem a API da Feegow para listar médicos por especialidades, além de várias outras funcionalidades, no qual permite o (a) atendente realizar a consulta dos profissionais e fazer o agendamento do (a) paciente com o (a) profissional disponível.

### 💻Tecnologias

Além das ferramentas abaixo, esta aplicação foi desenvolvida com as melhores práticas de desenvolvimento do mercado!

* Laravel
* SOLID
* TDD
* Tailwind CSS
* Docker
* MySQL

### 📚Guia de Instalação e Execução

#### Pré-requisitos

* [Git](https://git-scm.com/https:/)
* [Composer](https://getcomposer.org/https:/)
* [Docker Desktop](https://docs.docker.com/desktop/install/windows-install/https:/)
* [Laravel](https://laravel.com/docs/9.x/installationhttps:/)

#### Como Executar

* Clone o projeto `git clone https://github.com/genaro94/feegow-challenge.git`
* Digite o `composer install` no terminal do projeto. Ele vai instalar todos os pacotes php necessários
* Digite o `php artisan key:generate`. Esse vai gerar uma chave para sua aplicação. Sem isso o Laravel não vai funcionar
* Digite o `docker-compose up -d`. Ele vai subir todos as imagens necessárias e rodar o projeto.
* Verifique os nomes das imagens com `docker ps`
* Acesse a imagem da aplicação com `docker exec -it feegow-challenge_laravel-app_1 bash`. Onde o feegow-challenge_laravel-app_1 é o nome da imagem
* Crie o link simbólico com `ln -s public html`
* Gere as migrates com `php artisan migrate:refresh --seed`. Ele vai criar todas as tabelas necessárias no database

Pronto, após seguir o passo a passo só precisará acessar o link [localhost:8080](https://[localhost:8080]) no seu navegador e começar a usar a aplicação.

Caso deseje executar os testes basta executar `vendor/bin/phpunit` em seu terminal.

By Genaro Figueiredo 👋
