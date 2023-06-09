import { db } from "../db.js";

export const getUsers = (_, res) => {
  const q = "SELECT * FROM users";

  db.query(q, (err, data) => {
    if (err) return res.json(err);

    return res.status(200).json(data);
  });
};

export const addUser = (req, res) => {
  console.log(req.body);
  const q =
    "INSERT INTO users(`matricula`, `nome`, `email`, `senha`) VALUES(?)";

  const values = [
    req.body.matricula,
    req.body.nome,
    req.body.email,
    req.body.senha,
  ];

  db.query(q, [values], (err) => {
    if (err) return res.json(err);

    return res.status(200).json("Usuário criado com sucesso.");
  });
};

export const updateUser = (req, res) => {
  const q =
    "UPDATE users SET `matricula` = ?, `nome` = ?, `email` = ?, `senha` = ?, WHERE `matricula` = ?";

  const values = [
    req.body.matricula,
    req.body.nome,
    req.body.email,
    req.body.senha,
  ];

  db.query(q, [...values, req.params.matricula], (err) => {
    if (err) return res.json(err);

    return res.status(200).json("Usuário atualizado com sucesso.");
  });
};

export const deleteUser = (req, res) => {
  const q = "DELETE FROM users WHERE `matricula` = ?";

  db.query(q, [req.params.matricula], (err) => {
    if (err) return res.json(err);

    return res.status(200).json("Usuário deletado com sucesso.");
  });
};
