import { Link } from "react-router-dom";

const UpperContent = () => {
  return (
    <div className="upper_c">
      <div className="upper">
        <div className="upper_c_text">
          <h1>
            advance product and <br />
            marketing analytics
          </h1>
          <p>Examine Customer Behavior to Accelerate Growth</p>
        </div>
        <div className="form">
          <input
            type="email"
            name="email"
            id="email"
            placeholder="@ Your email address"
            required
          />
          <button id="b2">SUBSCRIBE</button>
        </div>
      </div>
      <div className="down_nav">
        <Link to="/">ALL</Link>
        <Link to="/marketing">Marketing</Link>
        <Link to="/guides">guides</Link>
        <Link to="/case-studies">case studies</Link>
        <Link to="/experts">experts</Link>
      </div>
    </div>
  );
};

export default UpperContent;
