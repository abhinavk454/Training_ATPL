import "../styles/LoginForm.css";
import { useState } from "react";

const LoginForm = () => {
  const [user, setUser] = useState({
    username: "",
    email: "",
    password: "",
  });
  const handleSubmit = (e) => {
    e.preventDefault();
    alert(`${user.username} ${user.email}`);
    setUser({
      username: "",
      email: "",
      password: "",
    });
  };
  return (
    <div className="login-form">
      <div className="login-form-header">
        <h1>Login</h1>
      </div>
      <div className="login-form-body">
        <form>
          <div className="form-group">
            <input
              type="text"
              className="form-control"
              id="username"
              placeholder="Enter username"
              value={user.username}
              onChange={(e) => setUser({ ...user, username: e.target.value })}
              required
            />
          </div>
          <div className="login-form-input">
            <input
              type="email"
              id="email"
              placeholder="Enter email"
              value={user.email}
              onChange={(e) => {
                setUser({ ...user, email: e.target.value });
              }}
              required
            />
          </div>
          <div className="login-form-input">
            <input
              type="password"
              id="password"
              placeholder="Enter password"
              value={user.password}
              onChange={(e) => {
                setUser({ ...user, password: e.target.value });
              }}
              required
            />
          </div>
          <div className="login-form-input">
            <button type="submit" onClick={(e) => handleSubmit(e)}>
              Register
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default LoginForm;
