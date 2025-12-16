# filmroll-api

Este repositório contém o backend da aplicação **Film Roll**, desenvolvido seguindo os princípios **SOLID** e uma arquitetura em camadas.

O backend é responsável por:
- autenticação de usuários
- persistência das listas de filmes
- regras de negócio da aplicação
- integração com uma API externa de filmes

O objetivo é manter um código organizado, testável e preparado para evolução.

---

## Princípios e Arquitetura

Este projeto segue:
- princípios SOLID
- separação clara de responsabilidades
- dependência de abstrações, não de implementações
- arquitetura baseada em camadas

Responsabilidades principais:
- **Controllers**: camada HTTP (entrada e saída de dados)
- **Services**: regras de negócio
- **Repositories**: acesso a dados
- **Clients**: integração com APIs externas

---

## Tecnologias planejadas

- PHP (versão moderna)
- API REST (JSON)
- Autenticação via JWT
- Banco de dados relacional (PostgreSQL ou MySQL)
- Integração com The Movie Database (TMDB)

---

## Escopo do MVP

Funcionalidades previstas:
- cadastro e login de usuários
- busca de filmes via API externa
- adicionar filmes à lista "quero assistir"
- marcar filmes como assistidos
- listar filmes do usuário autenticado

---

## Estrutura inicial do projeto

src/
Controllers/
Services/
Repositories/
Clients/
Contracts/
Config/
public/


- `Contracts`: interfaces do sistema
- `Clients`: comunicação com serviços externos
- `Repositories`: persistência de dados
- `Services`: regras de negócio
- `Controllers`: camada HTTP

---

## Como rodar o projeto

As instruções de instalação, configuração de ambiente e execução serão adicionadas conforme o backend for implementado.

---

## Status do projeto

🚧 Em desenvolvimento (estrutura inicial baseada em SOLID)

