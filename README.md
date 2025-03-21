# 📘 Site Gamificado de Matemática

Este projeto é um site gamificado desenvolvido para auxiliar no aprendizado da matemática por meio de quizzes interativos. O sistema utiliza o padrão MVC (Model-View-Controller) e integra diversos recursos, tais como:

- 🔐 Cadastro e Login de Usuários  
- 🧮 Quiz interativo por matéria  
- 🎮 Sistema de XP, níveis e conquistas  
- 📊 Análise de desempenho com gráficos interativos (Chart.js)  
- 🎯 Recomendações personalizadas com base no desempenho do usuário  

## 🚀 Recursos

- **📝 Quiz Interativo:**  
  Permite que o usuário responda a quizzes de diferentes matérias (ex.: Grandezas, Estatística, Aritmética, etc.).

- **🏆 Sistema de XP e Níveis:**  
  O usuário acumula XP a cada quiz respondido, subindo de nível e desbloqueando conquistas.

- **🥇 Conquistas:**  
  Ao atingir metas específicas (como "Primeiro Quiz Concluído", "1000 XP Atingidos"), o usuário recebe conquistas que são exibidas em seu perfil.

- **📈 Análise de Desempenho:**  
  Geração de gráficos interativos com Chart.js para exibir o percentual de acertos, total de tentativas e acertos por matéria.

## 🛠 Tecnologias Utilizadas

- **💻 PHP:** Backend e lógica do sistema, utilizando o padrão MVC.  
- **🗄️ MySQL:** Banco de dados para armazenar informações de usuários, quizzes, respostas, progresso e conquistas.  
- **🎨 Bootstrap:** Framework CSS para interfaces responsivas e modernas.  
- **📊 Chart.js:** Biblioteca JavaScript para visualização de dados e criação de gráficos interativos.  
- **⚡ JavaScript/jQuery:** Para interatividade e manipulação do DOM.

## 📌 Como Executar o Projeto

1. **Clone o repositório:**
```bash
   git clone https://github.com/IsisVct/Site_gamificado_de_matematica.git
```
   
2. **Configuração do Banco de Dados:**

   - Crie um banco de dados MySQL (ex.: `beta_db`).
   - Importe os arquivos SQL fornecidos (estrutura e dados) para criar as tabelas necessárias, como:
     - `users`
     - `questions`
     - `user_answers`
     - `user_progress`
     - `achievements`
     - `user_achievements`
     - etc.

3. **Configuração do Projeto:**

   - Configure o arquivo `DataBase.php` com as credenciais do seu banco de dados.

4. **Hospedagem Local:**

   - Utilize XAMPP, WAMP ou outro servidor PHP para executar o projeto localmente.
   - Acesse o site via navegador (ex.: `http://localhost/Site_gamificado_de_matematica`).

5. **Testar Funcionalidades:**

   - ✅ Faça o cadastro e login de um usuário.
   - 🎯 Realize os quizzes para testar o sistema de XP, níveis e conquistas.
   - 📊 Confira os gráficos de desempenho e recomendações na seção de performance.

## 🖼 Capturas de Tela

📌 **Tela Principal**  
![home](https://github.com/user-attachments/assets/baa1d26a-7f32-4087-818b-fa1566cd529a)

📌 **Tela de Login**  
![image](https://github.com/user-attachments/assets/dcb7252c-4666-411f-a932-06d10fa92b22)

📌 **Tela Principal após logado**  
![image](https://github.com/user-attachments/assets/b8702a97-f985-415c-ae96-8120dacb17e1)

📌 **Perfil do Usuário e Conquistas**  
![image](https://github.com/user-attachments/assets/1cf2936f-17cf-4156-99fd-ae47594afd64)

📌 **Quiz Interativo**  
![image](https://github.com/user-attachments/assets/fd8211e1-e55f-4341-a2e7-3165be3887e5)

📌 **Gráfico de Desempenho**  
![image](https://github.com/user-attachments/assets/17ff3453-838f-4639-a13a-f3893a70cdd1)  
![image](https://github.com/user-attachments/assets/acda866a-fd7a-4444-ae57-eb23fa337817)

## 📚 Referências e Créditos

- **Chart.js:** [https://www.chartjs.org/](https://www.chartjs.org/)  
- **Bootstrap:** [https://getbootstrap.com/](https://getbootstrap.com/)  
- **PHP:** [https://www.php.net/](https://www.php.net/)  
- **Ilustrações:**  
  - As ilustrações utilizadas no site foram fornecidas pelo [Storyset](https://storyset.com/)

