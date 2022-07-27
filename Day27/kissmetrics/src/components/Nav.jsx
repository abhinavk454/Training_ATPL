import { Link } from "react-router-dom";

const Nav = () => {
  return (
    <div className="nav">
      <div className="logo"></div>
      <div className="anchors">
        <Link to="/">Sass</Link>
        <Link to="/">E-commerce</Link>
        <Link to="/">Resources</Link>
        <Link to="/">Request Demo</Link>
        <button id="b1">SIGN IN</button>
      </div>
    </div>
  );
};

export default Nav;
