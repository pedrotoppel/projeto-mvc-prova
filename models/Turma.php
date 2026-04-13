<?php

    class Turma{

        public function getAll($conn)
        {
            return $conn->query("SELECT * FROM turma");
        }

        public function find($conn, $id)
        {
            $stmt = $conn->prepare("SELECT * FROM turma WHERE id=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function create($conn, $nome, $curso_id)
        {
            $stmt = $conn->prepare("INSERT INTO turma (nome, curso_id) VALUES (?, ?)");
            $stmt->bind_param("si", $nome, $curso_id);
            $stmt->execute();
        }

        public function update($conn, $nome, $curso_id, $id)
        {
            $stmt = $conn->prepare("UPDATE turma SET nome=?, curso_id=? WHERE id=?");
            $stmt->bind_param("sii", $nome, $curso_id, $id);
            $stmt->execute();
        }

        public function delete($conn, $id)
        {
            $stmt = $conn->prepare("DELETE FROM turma WHERE id=?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }

    }
?>    