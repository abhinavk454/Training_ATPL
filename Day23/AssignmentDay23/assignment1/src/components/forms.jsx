const frm = () => {
  return (
    <div className="form-main">
      <div className="header">
        <h2>Login Form</h2>
      </div>
      <form action="#">
        <div className="form-group">
          <label htmlFor="email">Email address</label>
          <br />
          <br />
          <input
            type="email"
            className="form-control"
            id="email"
            placeholder="Enter email"
          />
        </div>
        <div className="form-group">
          <label htmlFor="password">Password</label>
          <br />
          <br />
          <input
            type="password"
            className="form-control"
            id="password"
            placeholder="Password"
          />
        </div>
        <br />
        <br />
        <div className="form-group form-submit">
          <button type="submit" className="btn btn-primary">
            Log In
          </button>
        </div>
      </form>
    </div>
  );
};

export default frm;
