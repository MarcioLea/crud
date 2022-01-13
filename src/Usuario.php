<?php

    declare(strict_types=1);
    
    class Usuario {
        private $conexao;

        public function __construct(){
            try {
                $this->conexao = new PDO('mysql:host=localhost;dbname=banco', 'root', '');
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
            
        }

        public function listar(): array{
            $sql = 'SELECT * FROM usuarios';

            $usuarios = [];
            
            foreach ($this->conexao->query($sql) as $key => $value){
                array_push($usuarios, $value);
                
        }
            return $usuarios;
        }

        public function inserir(string $usuario, string $perfil, string $tel, string $email, string $login, string $senha){
                    
            $sql = 'INSERT INTO usuarios(usuario, perfil, tel, email, loginUsuario, senha) VALUES(?, ?, ?, ?, ?, ?)';
            $prepare = $this->conexao->prepare($sql);
        
            $prepare->bindParam(1,$usuario);
            $prepare->bindParam(2,$perfil);
            $prepare->bindParam(3,$tel);
            $prepare->bindParam(4,$email);
            $prepare->bindParam(5,$login);
            $prepare->bindParam(6,$senha);
            $prepare->execute();
        }

        public function atualizar(string $usuario, string $perfil, string $tel, string $email, string $login, string $senha, int $iduser){
           
            $sql = 'update usuarios set usuario = ? , perfil = ?, tel = ?, email = ?, login = ?, senha = ?where iduser = ?';
            $prepare = $this->conexao->prepare($sql);
      
            $prepare->bindParam(1,$usuario);
            $prepare->bindParam(2,$perfil);
            $prepare->bindParam(3,$tel);
            $prepare->bindParam(4,$email);
            $prepare->bindParam(5,$login);
            $prepare->bindParam(6,$senha);
            $prepare->bindParam(7,$iduser);

            $prepare->execute();
        }

        public function deletar(int $iduser){
            
            $sql = 'delete from usuarios where iduser = ?';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1,$iduser);

            $prepare->execute();
        }
    }
