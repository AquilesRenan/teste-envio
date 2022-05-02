<?php 

    class Hotel
    {
        private $name;
        private $email;
        private $cell;
        private $rg;
        private $dia;
        private $Reserva;

        public function getName()
        {
                return $this->nameCliente;
        }
        public function setName($name)
        {
                $this->name = $name;
        }
        public function getEmail()
        {
                return $this->email;
        }
        public function setEmail($email)
        {
                $this->email = $email;
        }
        public function getCell()
        {
                return $this->cell;
        }
        public function setCell($cell)
        {
                $this->cell = $cell;
        }
        public function getRg()
        {
                return $this->rg;
        }
        public function setRg($rg)
        {
                $this->rg = $rg;
        }
        public function getDia()
        {
                return $this->dia;
        }
        public function setDia($dia)
        {
                $this->dia = $dia;
        }
        public function getReserva()
        {
                return $this->Reserva;
        }
        public function setReserva($Reserva)
         {
                $this->Reserva = $Reserva;
        }

        function valorDasReservas(){
                switch ($this->Reserva) {
                    case 'Suíte Double Master':
                         return 150;
                        break;
                    case 'Suíte Família':
                        return 180;
                    case 'Suíte Single': 
                        return 100;
                    default:
                        echo 'escolha invalida';
                        break;
                }
            }

            function calcularReserva(){
                return $this->valorDasReservas() * $this->dia;
             }

        function __toString()
    {
        return nl2br(
            "<h1>
                name: $this->name
                Rg: $this->rg
                Email: $this->email
                cell: $this->cell
                Dias de estadia: $this->dia
                Tipo de reserva: $this->Reserva
                Valor da reserva: {$this->valorDasReservas()}
                Valor total: {$this->calcularReserva()}
             </h1>
            "
        );
    }
    }
