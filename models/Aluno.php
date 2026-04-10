<?php

    class Aluno{

        public function getAll($conn){
            return $conn->query("SELECT * FROM alunos");
        }

        public function find($conn, $id){
            $stmt = $conn->prepare("SELECT * FROM alunos WHERE id=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function senhaUsuario($conn, $id){
            $stmt = $conn->prepare("SELECT senha FROM alunos WHERE id=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_assoc();
            return $result["senha"];
        }

        public function create($conn, $turma_id, $nome, $email, $telefone, $password){
            $stmt = $conn->prepare("INSERT INTO alunos (turma_id, nome, email, telefone, senha) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issss", $turma_id, $nome, $email, $telefone, $password);
            $stmt->execute();
        }

        public function update($conn, $id, $turma_id, $nome, $email, $telefone, $password){
            $stmt = $conn->prepare("UPDATE alunos SET turma_id=?, nome=?, email=?, telefone=?, senha=? WHERE id=?");
            $stmt->bind_param("issssi", $turma_id, $nome, $email, $telefone, $password, $id);
            $stmt->execute();
        }

        public function delete($conn, $id){
            $stmt = $conn->prepare("DELETE FROM alunos WHERE id=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
        
    }

?>
