<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/tabela.css">
    <link rel="icon" href="imagens/logo-removed.png">
    <title>Conheça a academia</title>
</head>
<php$>
<body>


    <header>
        <div class="titulo">
            <img class="logo" src="imagens/logo-removed.png">
            <h1 class="h1header">Academia</h1>
            <h2 class="h2header">BIG BANG</h2>
        </div>
        <div class="titulo">
            <ul>
                <li><a href="equipe.php">Nossa equipe</a></li>
                <li><a href="#contato">contato</a></li>
                <li><a href="inicial.php" class="cadastre-se">Sair</a></li>
            </ul>
</div>
    </header>>
    <script>
        function mostrarTabela() {
            var tabela = document.getElementById("tabela-alunos");
            if (tabela.style.display === "none") {
                tabela.style.display = "table"; // Mostra a tabela se estiver oculta
            } else {
                tabela.style.display = "none"; // Oculta a tabela se estiver visível
            }
        }
    </script>
</head>
<body>

<?php
session_start(); // Inicia a sessão para acessar variáveis de sessão

// Verifica se o usuário está logado
if(isset($_SESSION['nome'])) 
    $nome = $_SESSION['nome'];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "bd_login";

    // Conexão com o banco de dados
    $conn = mysqli_connect($host, $user, $pass, $base);

    // Verifica se a conexão foi estabelecida corretamente
    if ($conn) {
        // Consulta SQL para selecionar todos os alunos e suas aulas
        $sql = "SELECT Aluno.id_aluno, Aluno.nome AS nome_aluno, Aluno.matricula, Aluno.telefone, Aluno.email, Aluno.endereco,
                       Aula.id_aula, Aula.nome_aula, HorarioAula.horario, DiaSemana.nome_dia
                FROM Aluno
                INNER JOIN Aluno_Turma ON Aluno.id_aluno = Aluno_Turma.id_aluno
                INNER JOIN Turma ON Aluno_Turma.id_turma = Turma.id_turma
                INNER JOIN Aula ON Aluno_Turma.id_aula = Aula.id_aula
                INNER JOIN HorarioAula ON Aluno_Turma.id_horario = HorarioAula.id_horario
                INNER JOIN DiaSemana ON Aluno_Turma.id_dia = DiaSemana.id_dia";
        
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "<h2>Lista de Alunos e suas Aulas</h2>";
            echo "<button onclick='mostrarTabela()'>Mostrar Tabela de Alunos e Aulas</button>";
            echo "<table id='tabela-alunos'>
                    <tr>
                        <th>ID Aluno</th>
                        <th>Nome Aluno</th>
                        <th>Matrícula</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Endereço</th>
                        <th>ID Aula</th>
                        <th>Nome Aula</th>
                        <th>Horário</th>
                        <th>Dia da Semana</th>
                    </tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["id_aluno"]."</td>
                        <td>".$row["nome_aluno"]."</td>
                        <td>".$row["matricula"]."</td>
                        <td>".$row["telefone"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["endereco"]."</td>
                        <td>".$row["id_aula"]."</td>
                        <td>".$row["nome_aula"]."</td>
                        <td>".$row["horario"]."</td>
                        <td>".$row["nome_dia"]."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "Nenhum aluno encontrado.";
        }
    
        // Fecha a conexão com o banco de dados
        $conn->close();
    } else {
        // Caso não esteja logado, redireciona para a página de login
        header("Location: login.php");
        exit();
    }
?>
    <footer>
        <ul>
            <li><a href="#"><img src="imagens/logo-removed.png" class="imgfooter"></a></li>
        </ul>
        <ul class="icon">
            <li>
                <img src="imagens/insta.png" class="imgIcon">
                <img src="imagens/whatsapp.png" class="imgIcon">
                <img src="imagens/x.png" class="imgIcon">
                <img src="imagens/facebook.png" class="imgIcon">
            </li>
        </ul>
        <ul>
            <li class="footerli">
                <h1>Informações para contato</h1>
                <a id="contato">
            </li>
            <li class="footerli">Telefone: (xx) xxxxx-xxxxx</li>
            <li class="footerli">Celular: (xx) xxxxx-xxxxx</li>
            <li class="footerli">Email: BigBang47@gmail.com</li>
        </ul>
    </footer>

</body>

</html>
