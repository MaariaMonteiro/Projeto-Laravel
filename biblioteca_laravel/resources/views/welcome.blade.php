<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Produto</title>
  <!-- Link para o Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Ícones do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    body {
      background-color: #f7f8fa;
      font-family: 'Arial', sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .navbar {
      background-color: #6f42c1;
      padding: 15px 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
      color: #f8f9fa;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .navbar-nav .nav-link {
      font-size: 1.1rem;
      color: white;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      gap: 8px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      background-color: #5a33a3;
      transform: translateY(-2px);
    }

    .navbar-collapse {
      display: flex;
      justify-content: center;
    }

    .navbar-nav {
      gap: 15px;
    }

    .container {
      max-width: 600px;
      padding: 40px;
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      margin-top: 80px;
      transform: translateY(-20px);
      border: 1px solid rgba(111, 66, 193, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container:hover {
      transform: translateY(-20px) scale(1.01);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    h3 {
      text-align: center;
      font-size: 1.8rem;
      color: #6f42c1;
      margin-bottom: 30px;
      position: relative;
      padding-bottom: 15px;
    }

    h3::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: linear-gradient(to right, #6f42c1, #8e44ad);
    }

    .form-label {
      font-weight: bold;
      font-size: 1.1rem;
      margin-bottom: 10px;
      color: #555;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .form-control {
      margin-bottom: 25px;
      font-size: 1.1rem;
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid #ddd;
      transition: all 0.3s ease;
      background-color: #f9f9f9;
    }

    .form-control:hover {
      background-color: #fff;
    }

    .form-control:focus {
      border-color: #6f42c1;
      box-shadow: 0 0 8px rgba(111, 66, 193, 0.3);
    }

    .btn-submit {
      background: linear-gradient(135deg, #6f42c1, #8e44ad);
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 1.1rem;
      width: 100%;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      font-weight: 500;
      letter-spacing: 0.5px;
      margin-top: 10px;
    }

    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(111, 66, 193, 0.4);
    }

    @media (max-width: 768px) {
      .container {
        margin-top: 100px;
        padding: 30px 20px;
      }
      
      .navbar-nav {
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="bi bi-box-seam"></i>
        Cadastro de Produto
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="bi bi-house"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-boxes"></i>
              Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-envelope"></i>
              Contato
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h3>Cadastrar Novo Produto</h3>
    <form action="/cadastrar-produto" method="POST">
      @csrf
      <div class="mb-4">
        <label for="lblNome" class="form-label">
          <i class="bi bi-tag"></i>
          Nome:
        </label>
        <input type="text" name="nome" class="form-control" placeholder="Ex: Notebook Dell Inspiron" required>
      </div>
      
      <div class="mb-4">
        <label for="lblValor" class="form-label">
          <i class="bi bi-currency-dollar"></i>
          Valor:
        </label>
        <input type="text" name="valor" class="form-control" placeholder="Ex: 2999.99" required>
      </div>
      
      <div class="mb-4">
        <label for="lblQuantidade" class="form-label">
          <i class="bi bi-box-seam"></i>
          Quantidade:
        </label>
        <input type="text" name="estoque" class="form-control" placeholder="Ex: 50" required>
      </div>
      
      <button type="submit" class="btn-submit">
        <i class="bi bi-check-circle"></i>
        Cadastrar
      </button>
    </form>
  </div>

  <!-- Scripts do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>