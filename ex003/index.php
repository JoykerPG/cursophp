<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes em PHP</h1>
    <?php
        $nome = "Joyker";
        $sobrenome = "Gomes";
        const PAIS = "Brasil";
        echo <<<FRASE
        Muito prazer,
         $nome $sobrenome!
                      Você mora no PAIS
        FRASE;
        var_dump($nome)

        //Regras para nomes identificadores:
        //1- Variáveis sempre começam com o símbolo $
        //2- O segundo pode ser letra ou o símbolo _
        //3- Do terceiro em diante, aceita caracteres [a-z], [A-Z], [0-9] e [_]
        //4- Aceita caracteres da tabela ASCII a partir de 128
        //5- Aceita caracteres acentuads como á, õ, ç
        //6- A linguagem é case sensitive em relação aos nomes
        //7- Nomes especiais como $this não podem ser usados

        //Recomendações para dar nomes:
        //1- Tente dar omes claros e de fácil identificação
        //2- Evite nomes muito curtos ou muito longos
        //3- Defina um padrão e siga em todo o projeto
        //4- Para variáveis, dê preferência a letras minúsculas
        //5- Para constantes, dê preferência a letras maiúsculas
        //6- Use camelCase para métodos e atributos
        //7- Use snake_case para nomear constantes

        // Tipos primitivos: escalares, compostos e especiais

        // escalares:
        // $sobrenome = "Gomes" (string)
        // $idade = 43 (int ou integer)
        // $peso = 77.5 (float, double)
        // $casado = true (bool ou boolean)
        // exemplos de integer: 0x = hexadecimal; 0b = binário; 0 = octal

        // compostos: array, object

        // especiais: null, resource, callable, mixed

        // concatenation operator <.>

        // aspas duplas --> interpretar conteúdo entre aspas

        // aspas simples --> não interpretar conteúdo entre aspas

        // constantes precisam ser concatenadas com o operador de concatenação <.>, porque não consegue interpretar mesmo dentro de aspas duplas

        // Escape Sequences:
        // \n Nov Linha
        // \t Tabulação horizontal
        // \\ Barra invertida
        // \$ Sinal de cifrão
        // \u{} Codepoint Unicode

        // Sintaxe Heredoc:
        // <<<




    ?>

</body>
</html>