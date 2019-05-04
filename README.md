# Sistema de Reservas
### Sistema simples de gerenciamento e cadastro de reservas e equipamentos.
![Captura de tela de 2019-05-04 17-21-04](https://user-images.githubusercontent.com/40250320/57185468-d5ee7a80-6e91-11e9-8a0b-4c2457447ae0.png)


# Começando
Siga as instruções abaixo para a execução do projeto.

# Execução
> Primeiro clone o nosso repositório 
```
git clone https://github.com/eduardobispof/reserva.git

```
> Agora entre na pasta "reserva" e execute :

```
composer install
```
>> Lembrando que após executar o comando abaixo é importante que você configure os seus dados de database!
```
cp .env.example .env
```

> Gere a chave do nosso projeto
```
php artisan key:generate
```
> Migre nossas tabelas e a semeie
```
php artisan migrate --seed
```
> Instale o nosso framework front-end
```
npm install
```
```
npm run dev
```
> Agora é só rodar o projeto e bom uso :)
```
php artisan serve
```
# Inspiração
Projeto idealizado pelo o professor alexandre com o intuito de fixação do framework laravel e critério de avaliação prática da unidade.


