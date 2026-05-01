<!DOCTYPE html>

<html lang="pt-BR">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Base Inteligente para Provedores</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header class="hero">
  <nav>
    <h2>DataISP</h2>
    <a href="{{ route('login') }}">Entrar</a>
  </nav>

  <div class="hero-content">
    <h1>Reduza prejuízos com inadimplência antes da ativação</h1>
    <p>
      Plataforma colaborativa de inteligência de dados para provedores de internet
      tomarem decisões mais seguras.
    </p>
    <button href="#contato">Quero conhecer</button>
  </div>
</header>

<section class="problem">
  <h2>O problema que resolvemos</h2>
  <p>A inadimplência começa no momento da ativação.</p>

  <div class="cards">
    <div class="card">
      <h3>R$ 100</h3>
      <p>Mensalidade média</p>
    </div>
    <div class="card">
      <h3>2 a 4 meses</h3>
      <p>Permanência até bloqueio</p>
    </div>
    <div class="card">
      <h3>R$ 150</h3>
      <p>Custo médio de instalação</p>
    </div>
  </div>

  <h3 class="highlight">Prejuízo médio: R$ 350 a R$ 550 por cliente</h3>
</section>

<section class="solution">
  <h2>Nossa solução</h2>
  <p>
    Nossa base permite identificar históricos de inadimplência antes da instalação,
    ajudando sua empresa a evitar ativações de alto risco.
  </p>

  <div class="grid">
    <div>Evitar ativações de alto risco</div>
    <div>Reduzir custos operacionais</div>
    <div>Melhorar a carteira de clientes</div>
    <div>Aumentar previsibilidade financeira</div>
  </div>
</section>

<section class="impact">
  <h2>Impacto real no seu negócio</h2>
  <p>Evitar apenas 10 clientes inadimplentes por mês pode representar:</p>

  <div class="impact-box">
    <h3>Até R$ 5.000/mês</h3>
    <span>Mais de R$ 60.000 por ano</span>
  </div>
</section>

<section class="mission">
  <div>
    <h2>Missão</h2>
    <p>
      Ajudar provedores de internet a tomar decisões inteligentes,
      reduzindo perdas financeiras e fortalecendo suas operações.
    </p>
  </div>

  <div>
    <h2>Visão</h2>
    <p>
      Ser referência em inteligência de dados para redução de inadimplência
      no setor de telecomunicações.
    </p>
  </div>
</section>

<section class="values">
  <h2>Nossos valores</h2>
  <ul>
    <li>Uso responsável de dados</li>
    <li>Transparência</li>
    <li>Segurança da informação</li>
    <li>Foco em resultado real</li>
    <li>Crescimento sustentável</li>
  </ul>
</section>

<section id="contato" class="contact">
  <h2>Cada consulta é uma decisão mais segura</h2>
  <p>Cada decisão mais segura é dinheiro que deixa de ser perdido.</p>

  <form onsubmit="sendForm(event)">
    <input type="text" placeholder="Nome" required />
    <input type="email" placeholder="E-mail" required />
    <input type="text" placeholder="Nome do provedor" required />
    <button type="submit">Solicitar contato</button>
  </form>

  <p id="message"></p>
</section>

<footer>
  <p>© 2026 DataISP — Inteligência para provedores</p>
</footer>

<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  background: #0b1220;
  color: #e5e7eb;
  overflow-x: hidden;
}

/* HERO */
.hero {
  min-height: 100vh;
  padding: 30px 8%;
  background: radial-gradient(circle at top, #0f62fe, #020617);
  position: relative;
}

/* efeito blur fundo */
.hero::before {
  content: "";
  position: absolute;
  width: 500px;
  height: 500px;
  background: #0f62fe;
  filter: blur(200px);
  top: -100px;
  right: -100px;
  opacity: 0.4;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  z-index: 2;
}

nav h2 {
  font-weight: 700;
}

nav a {
  text-decoration: none;
  color: white;
  padding: 10px 20px;
  border-radius: 30px;
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(10px);
  transition: 0.3s;
}

nav a:hover {
  background: rgba(255,255,255,0.2);
}

.hero-content {
  margin-top: 140px;
  max-width: 700px;
  position: relative;
  z-index: 2;
}

.hero h1 {
  font-size: 56px;
  line-height: 1.1;
  font-weight: 700;
  background: linear-gradient(to right, #fff, #9ca3af);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.hero p {
  margin-top: 20px;
  font-size: 20px;
  color: #9ca3af;
}

button {
  margin-top: 30px;
  padding: 14px 28px;
  border-radius: 40px;
  border: none;
  cursor: pointer;
  font-weight: 600;
  background: linear-gradient(135deg, #22c55e, #4ade80);
  color: white;
  transition: 0.3s;
}

button:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(34,197,94,0.3);
}

/* SEÇÕES */
section {
  padding: 100px 8%;
  text-align: center;
}

section h2 {
  font-size: 38px;
  margin-bottom: 20px;
}

section p {
  color: #9ca3af;
}

/* CARDS MODERNOS */
.cards,
.grid,
.mission {
  display: grid;
  gap: 25px;
  margin-top: 40px;
}

.cards {
  grid-template-columns: repeat(3, 1fr);
}

.card,
.grid div,
.mission div,
.impact-box {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);
  backdrop-filter: blur(12px);
  padding: 30px;
  border-radius: 20px;
  transition: 0.3s;
}

.card:hover,
.grid div:hover {
  transform: translateY(-6px);
  border-color: #0f62fe;
}

.card h3 {
  color: #4ade80;
  font-size: 30px;
}

.highlight {
  margin-top: 40px;
  color: #f87171;
  font-size: 26px;
}

/* IMPACT */
.impact {
  background: linear-gradient(135deg, #020617, #0f172a);
}

.impact-box h3 {
  font-size: 44px;
  color: #22c55e;
}

/* FORM */
.contact {
  background: #020617;
}

form {
  max-width: 450px;
  margin: 30px auto;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

input {
  padding: 15px;
  border-radius: 12px;
  border: 1px solid rgba(255,255,255,0.1);
  background: rgba(255,255,255,0.05);
  color: white;
}

input::placeholder {
  color: #9ca3af;
}

/* FOOTER */
footer {
  background: #020617;
  padding: 25px;
  text-align: center;
  color: #9ca3af;
}

/* ANIMAÇÃO SCROLL */
.hidden {
  opacity: 0;
  transform: translateY(40px);
  transition: 0.8s;
}

.show {
  opacity: 1;
  transform: translateY(0);
}

/* RESPONSIVO */
@media (max-width: 900px) {
  .cards,
  .grid,
  .mission {
    grid-template-columns: 1fr;
  }

  .hero h1 {
    font-size: 38px;
  }
}
</style>
<script src="script.js">
    function scrollToSection(id) {
  document.getElementById(id).scrollIntoView({
    behavior: "smooth"
  });
}

function sendForm(event) {
  event.preventDefault();

  const message = document.getElementById("message");
  message.textContent = "Solicitação enviada com sucesso!";

  event.target.reset();
}

/* animação ao rolar */
const elements = document.querySelectorAll("section, .card, .grid div");

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    }
  });
});

elements.forEach(el => {
  el.classList.add("hidden");
  observer.observe(el);
});
</script>
</body>
</html>