# minicurso-doctrine

Este projeto refere-se a atividade prática desenvolvido minicurso 'Uso de ORM para o desenvolvimento de software" ministrado pelo tutor Juscelino Fernandes da Costa Junior.

Para executar esse projeto vocês precisarão do composer, git e php8 instalados na máquina e mysql rodando no localhost na porta 3306.

```
  git clone https://github.com/Juscostajr/minicurso-doctrine.git
```

```
  cd minicurso-doctrine
```

```
  composer install
```
Certifiquem-se que a biblioteca pdo_mysql esteja liberada no arquivo php.ini
Certifiquem-se também de ter um banco de dados criado com o nome minicurso-doctrine

```
  php --ini
```
Para criar o banco de dados execute o seguinte comando
```
  php doctrine orm:schema-tool:create
```
Para executar o projeto, utilizem o comando:
```
  php -S localhost:8081
```
