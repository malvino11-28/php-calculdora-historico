<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
    <body class="bg-light">
      <div class="container d-flex justify-content-center">
        <div class="card shadow" style="max-width: 400px; margin-top: 50px;">
          <div class="card-header bg-primary text-white text-center">
            <h4>Calculadora Web</h4>
          </div>
          <div class="card-body">
            <form action="index.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Número 1</label>
                <input type="number" name="n1" class="form-control" required placeholder="0" />
              </div>
              
              <div class="mb-3">
                <label class="form-label">Operações</label>
                <select name="operacao" class="form-select">
                  <option value="soma">Soma [+]</option>
                  <option value="soma">Subtração [-]</option>
                  <option value="soma">Multiplicação [x]</option>
                  <option value="soma">Divisão [÷]</option>
                  <option value="soma">Resto da Divisão [÷]</option>
                  <option value="soma">Porcentagem [%]</option>
                </select>
              </div>
              
              <div class="mb-3">
                <label class="form-label">Número 2</label>
                <input type="number" name="n2" class="form-control" required placeholder="0" />
              </div>
              
              <button type="submit" name="calcular" class="btn btn-primary w-100">Calcular</button>
              <hr/>
              
              <div class="alert alert-secondary text-center mb-0">
                Resultado: <strong><?php echo $result ?? '0'; ?></strong>
              </div>
              
            </form>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</head>