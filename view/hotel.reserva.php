<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Reservando seu quarto</title>
</head>
<body>
    <header class="topo">
        <h1 id="h1">Registro!</h1>
    </header>
    <form class="reserva" name="form1" class="form-text" action="../controller/hotel.controller.php" method="post">

                <label>Nome:
                    <input class="b-r-10 form-text bg-c-verde-claro b-remove" type="text" name="txtnome" placeholder="Aquiles" required>
                </label>
                <label>Rg:
                    <input class="b-r-10 form-text bg-c-verde-claro b-remove" type="number" name="txtrg" required>
                </label>
                <label>Telefone:
                    <input class="b-r-10 form-text bg-c-verde-claro b-remove" type="number" name="txttelefone" required>
                </label>
                <label>Email:
                    <input class="b-r-10 form-text bg-c-verde-claro b-remove" type="text" name="txtemail" required>
                </label>
                <p>Selecione a acomodação que deseja:</p>
                    <select name="txtreserva" class="button">
                        <option name="double" value="Suíte Double Master">Suíte Double Master: R$ 150,00 a diária</option>
                        <option name="familia" value="Suíte Família">Suíte Família: R$ 180,00 a diária.</option>
                        <option name="single" value="Suíte Single">Suíte Single: R$ 100,00 a diária.</option>
                    </select>
                    <div>
                        <p>Dias de reserva:</p><label><input id="ley" class="button" type="number" name="txtdia" placeholder="0" required></label>
                    </div>
                
                <h4>Confime suas opções: </h4>
                <input type="submit" class="bg-c-verde botao b-c-verde" value="Efetuar Reserva">
                <input type="reset" class="bg-c-azul botao b-c-azul" value="Limpar Campos">
            </form>
</body>
</html>