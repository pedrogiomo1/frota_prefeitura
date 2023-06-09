import { db } from "../db.js";

export const login = (req, res) => {
  const q = "SELECT * FROM users WHERE `matricula` = ? AND `senha` = ?";
  const values = [req.body.matricula, req.body.senha];
  
  db.query(q, values, (err, results) => {
    if (err) {
      return res.json(err);
    }

    if (results.length > 0) {
      return res.status(200).json(results);
    } else {
      // Credenciais inválidas
      return res.status(401).json(null);
    }
  });
};
