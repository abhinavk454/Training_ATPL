import image from "../images/logo.svg";
import { Link } from "react-router-dom";

const Header = () => {
  return (
    <div className="header">
      <div className="icon"></div>
      <div className="nav">
        <Link to="/">Home</Link> | <Link to="/about">About</Link> |{" "}
        <Link to="/contact">Download</Link> | <Link to="/contact">Docs</Link> |{" "}
        <Link to="/contact">Get Involved</Link> |{" "}
        <Link to="/contact">Security</Link> |{" "}
        <Link to="/contact">Certification</Link> |{" "}
        <Link to="/contact">News</Link>
      </div>
    </div>
  );
};

export default Header;
