@extends('layouts.login')

@section('contenido')

<div class="container">
  <canvas id="particles"></canvas>

  <form class="login-form" method="POST" action="{{ route('logear') }}">
    @csrf
    <h1 class="title">Sistema Ventas</h1>
    <p class="subtitle">Inicia sesión en tu cuenta</p>

    <div class="input-group">
      <input type="email" name="email" value="{{ old('email') }}" required placeholder="Correo Electrónico">
    </div>

    <div class="input-group">
      <input type="password" name="password" required placeholder="Contraseña">
    </div>

    <button type="submit" class="btn-login">Entrar</button>

    <p class="signup">
      ¿No tienes cuenta?
      <a href="#">Registrarse</a>
    </p>

    @if ($errors->any())
    <div class="error-box">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </form>
</div>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body, html {
  height: 100%;
  background: linear-gradient(135deg, #1f1c2c, #928dab);
  overflow: hidden;
}

.container {
  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

#particles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}

.login-form {
  position: relative;
  z-index: 2;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(20px);
  padding: 3rem 2rem;
  border-radius: 20px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.2);
  text-align: center;
  max-width: 400px;
  width: 100%;
}

.title {
  color: #fff;
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
}

.subtitle {
  color: #ddd;
  margin-bottom: 2rem;
  font-size: 1rem;
}

.input-group {
  margin-bottom: 1.5rem;
}

.input-group input {
  width: 100%;
  padding: 14px;
  border: none;
  border-radius: 10px;
  background: rgba(255, 255, 255, 0.2);
  color: #fff;
  font-size: 1rem;
  outline: none;
  transition: 0.3s;
}

.input-group input:focus {
  background: rgba(255, 255, 255, 0.3);
}

.btn-login {
  width: 100%;
  padding: 15px;
  font-size: 1rem;
  border: none;
  border-radius: 10px;
  background: linear-gradient(135deg, #ff512f, #dd2476);
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: 0.4s;
}

.btn-login:hover {
  transform: scale(1.05);
}

.signup {
  margin-top: 1.5rem;
  color: #ccc;
  font-size: 0.9rem;
}

.signup a {
  color: #fff;
  text-decoration: underline;
}

.error-box {
  margin-top: 1rem;
  color: #ff4b5c;
  font-size: 0.9rem;
  text-align: left;
}

@media (max-width: 480px) {
  .login-form {
    padding: 2rem 1rem;
  }

  .title {
    font-size: 2rem;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const canvas = document.getElementById('particles');
  const ctx = canvas.getContext('2d');
  let particlesArray = [];
  let mouse = { x: null, y: null };

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();
  });

  window.addEventListener('mousemove', function (e) {
    mouse.x = e.x;
    mouse.y = e.y;
  });

  window.addEventListener('touchmove', function (e) {
    mouse.x = e.touches[0].clientX;
    mouse.y = e.touches[0].clientY;
  });

  function Particle() {
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height;
    this.size = Math.random() * 3 + 1;
    this.speedX = (Math.random() - 0.5) * 1.5;
    this.speedY = (Math.random() - 0.5) * 1.5;
  }

  Particle.prototype.update = function () {
    this.x += this.speedX;
    this.y += this.speedY;

    // rebote en los bordes
    if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
    if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;

    // atracción al mouse
    let dx = mouse.x - this.x;
    let dy = mouse.y - this.y;
    let dist = Math.sqrt(dx*dx + dy*dy);
    if (dist < 100 && dist > 0) {
      this.x -= dx / 20;
      this.y -= dy / 20;
    }
  };

  Particle.prototype.draw = function () {
    ctx.fillStyle = 'rgba(255,255,255,0.8)';
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fill();
  };

  function init() {
    particlesArray = [];
    for (let i = 0; i < 120; i++) {
      particlesArray.push(new Particle());
    }
  }

  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (let i = 0; i < particlesArray.length; i++) {
      particlesArray[i].update();
      particlesArray[i].draw();
    }
    requestAnimationFrame(animate);
  }

  init();
  animate();
});
</script>

@endsection
