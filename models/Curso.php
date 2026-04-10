<?php

class Curso
{

    public function getAll($conn)
    {
        return $conn->query("SELECT * FROM curso");
    }

    public function find($conn, $id)
    {
        $stmt = $conn->prepare("SELECT * FROM curso WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($conn, $nome, $area_id)
    {
        $stmt = $conn->prepare("INSERT INTO curso (nome, area_id) VALUES (?, ?)");
        $stmt->bind_param("si", $nome, $area_id);
        $stmt->execute();
    }

    public function update($conn, $nome, $area_id, $id)
    {
        $stmt = $conn->prepare("UPDATE curso SET nome=?, area_id=? WHERE id=?");
        $stmt->bind_param("sii", $nome, $area_id, $id);
        $stmt->execute();
    }

    public function delete($conn, $id)
    {
        $stmt = $conn->prepare("DELETE FROM curso WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
