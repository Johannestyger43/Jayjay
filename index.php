
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="NexaVault — practical digital tools and resources for creators, freelancers and online entrepreneurs.">
<title>NexaVault | Digital Tools for Your Next Move</title>

<style>
:root {
  --bg: #080d18;
  --panel: #111a2b;
  --green: #b8ff5c;
  --white: #f5f7fa;
  --muted: #a2adbf;
}
* { box-sizing: border-box; }
body {
  margin: 0;
  background: var(--bg);
  color: var(--white);
  font-family: Arial, sans-serif;
  line-height: 1.6;
}
header {
  padding: 20px 7%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #202a3b;
}
.logo { font-size: 25px; font-weight: 800; }
.logo span { color: var(--green); }
nav a {
  color: var(--white);
  text-decoration: none;
  margin-left: 20px;
  font-size: 14px;
}
.hero {
  padding: 90px 7% 75px;
  text-align: center;
  background: radial-gradient(ellipse at top, #1a2941, var(--bg) 70%);
}
.tag {
  display: inline-block;
  color: var(--green);
  border: 1px solid #45602b;
  border-radius: 30px;
  padding: 7px 15px;
  font-size: 12px;
}
h1 {
  font-size: clamp(38px, 7vw, 68px);
  line-height: 1.08;
  max-width: 850px;
  margin: 25px auto;
}
h1 span { color: var(--green); }
.hero p {
  color: var(--muted);
  max-width: 580px;
  margin: auto;
}
.btn {
  display: inline-block;
  margin-top: 28px;
  padding: 13px 23px;
  border-radius: 8px;
  background: var(--green);
  color: #10170b;
  font-weight: bold;
  text-decoration: none;
}
section { padding: 60px 7%; }
.section-title { text-align: center; margin-bottom: 35px; }
.section-title p { color: var(--muted); }
.products {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 20px;
}
.card {
  background: var(--panel);
  border: 1px solid #253149;
  border-radius: 14px;
  padding: 25px;
}
.card .emoji { font-size: 30px; }
.card h3 { margin-bottom: 8px; }
.card p { color: var(--muted); font-size: 14px; min-height: 65px; }
.price { font-size: 25px; font-weight: bold; color: var(--green); }
.card a {
  display: block;
  text-align: center;
  text-decoration: none;
  background: var(--green);
  color: #10170b;
  padding: 11px;
  border-radius: 7px;
  margin-top: 18px;
  font-weight: bold;
}
.features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
}
.feature {
  padding: 20px;
  border-left: 2px solid var(--green);
  background: #101827;
}
.feature p { color: var(--muted); font-size: 14px; }
footer {
  border-top: 1px solid #202a3b;
  padding: 30px 7%;
  text-align: center;
  color: var(--muted);
  font-size: 13px;
}
footer a { color: var(--green); }
@media(max-width:600px) {
  header { padding: 17px 5%; }
  nav a { margin-left: 10px; font-size: 12px; }
  .hero { padding: 70px 6%; }
  section { padding: 45px 6%; }
}
</style>
</head>

<body>

<header>
  <div class="logo">NEXA<span>VAULT</span></div>
  <nav>
    <a href="#products">Products</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<main>
<section class="hero">
  <span class="tag">YOUR DIGITAL ADVANTAGE STARTS HERE</span>
  <h1>Work smarter.<br><span>Build your next move.</span></h1>
  <p>
    Discover practical digital resources, creator tools and
    ready-to-use kits designed to help you move forward online.
  </p>
  <a class="btn" href="#products">Explore the Vault →</a>
</section>

<section id="products">
  <div class="section-title">
    <h2>Explore Digital Products</h2>
    <p>Useful resources. Simple solutions. Instant digital access.</p>
  </div>

  <div class="products">

    <article class="card">
      <div class="emoji">🚀</div>
      <h3>Creator Launch Kit</h3>
      <p>Planning templates and practical resources to help launch your online brand.</p>
      <div class="price">$5</div>
      <a href="#" onclick="buy('creator'); return false;">Get this kit</a>
    </article>

    <article class="card">
      <div class="emoji">💼</div>
      <h3>Remote Job Application Kit</h3>
      <p>Organize your job search with application trackers and professional templates.</p>
      <div class="price">$4</div>
      <a href="#" onclick="buy('jobs'); return false;">Get this kit</a>
    </article>

    <article class="card">
      <div class="emoji">📱</div>
      <h3>Social Content Planner</h3>
      <p>Plan posts, organize ideas and create a consistent content schedule.</p>
      <div class="price">$7</div>
      <a href="#" onclick="buy('planner'); return false;">Get this kit</a>
    </article>

  </div>
</section>

<section id="about">
  <div class="section-title">
    <h2>Why NexaVault?</h2>
    <p>A straightforward digital resource hub.</p>
  </div>
  <div class="features">
    <div class="feature">
      <h3>⚡ Practical</h3>
      <p>Resources designed to help you take action.</p>
    </div>
    <div class="feature">
      <h3>🌍 Worldwide</h3>
      <p>Built for creators and independent professionals everywhere.</p>
    </div>
    <div class="feature">
      <h3>🔒 Secure checkout</h3>
      <p>Purchases will be handled through an approved payment provider.</p>
    </div>
  </div>
</section>
</main>

<footer id="contact">
  <p><strong>NexaVault</strong> — Digital tools for your next move.</p>
  <p>Owner: Johanes Ojwang</p>
  <p>Support: <a href="mailto:johannesdemainkey9@gmail.com">johannesdemainkey9@gmail.com</a></p>
  <p>© <span id="year"></span> NexaVault. All rights reserved.</p>
</footer>

<script>
document.getElementById("year").textContent = new Date().getFullYear();

const checkoutLinks = {
  creator: "",
  jobs: "",
  planner: ""
};

function buy(product) {
  const link = checkoutLinks[product];

  if (link) {
    window.location.href = link;
  } else {
    alert("Checkout is being prepared. Please check back soon.");
  }
}
</script>

</body>
</html>
