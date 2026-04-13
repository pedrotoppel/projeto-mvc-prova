<?php

class Disciplina
{

    public function getAll($conn)
    {
        return $conn->query("SELECT * FROM disciplina");
    }

    public function find($conn, $id)
    {
        $stmt = $conn->prepare("SELECT * FROM disciplina WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($conn, $nome, $professor_id, $turma_id)
    {
        $stmt = $conn->prepare("INSERT INTO disciplina (nome, professor_id, turma_id) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $nome, $professor_id, $turma_id);
        $stmt->execute();
    }

    public function update($conn, $nome, $professor_id, $turma_id, $id)
    {
        $stmt = $conn->prepare("UPDATE disciplina SET nome=?, professor_id=?, turma_id=? WHERE id=?");
        $stmt->bind_param("siii", $nome, $professor_id, $turma_id, $id);
        $stmt->execute();
    }

    public function delete($conn, $id)
    {
        $stmt = $conn->prepare("DELETE FROM disciplina WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
