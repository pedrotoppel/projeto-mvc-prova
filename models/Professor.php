<?php

    class Professor{

        public function getAll($conn){
            return $conn->query("SELECT * FROM professores");
        }

        public function find($conn, $id){
            $stmt = $conn->prepare("SELECT * FROM professores WHERE id=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function create($conn, $nome, $email, $password){
            $stmt = $conn->prepare("INSERT INTO professores (nome, email, senha) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nome, $email, $password);
            $stmt->execute();
        }

        public function update($conn, $id, $nome, $email, $password){
            $stmt = $conn->prepare("UPDATE professores SET nome=?, email=?, senha=? WHERE id=?");
            $stmt->bind_param("sssi", $nome, $email, $password, $id);
            $stmt->execute();
        }

        public function delete($conn, $id){
            $stmt = $conn->prepare("DELETE FROM professores WHERE id=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }

?>
