<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="src/styles/style.css">
  <title>SGTC</title>
</head>
<body>
  <div id="sgtc">
    <h1>Coisas para fazer</h1>

    <form class="sgtc-form">
      <input type="text" name="description" placeholder="Escreva a sua tarefa aqui" required>
      <button type="submit" class="form-button">
        <i class="fa-solid fa-plus"></i>
      </button>
    </form>

    <div id="tasks">
        <div class="task">
          <input 
            type="checkbox" 
            name="progress" 
            class="progress"
          >
            
          <p class="task-description">
            Teste de tarefa
          </p>

          <div class="task-actions">
            <a class="action-button edit-button">
              <i class="fa-regular fa-pen-to-square"></i>
          </a>

          <a class="action-button delete-button">
            <i class="fa-regular fa-trash-can"></i>
          </a>
        </div>

        <form class="sgtc-form edit-task hidden">
          <input type="text" class="hidden" name="id" value="">
          <input 
            type="text"
            name="description" 
            placeholder="Edit your task here" 
          >
          <button type="submit" class="form-button confirm-button">
            <i class="fa-solid fa-check"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>