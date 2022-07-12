const Footer = () => {
  return (
    <div className="footer">
      <div className="left">
        <div className="ll"></div>
        <div className="ur">
          <p>
            © OpenJS Foundation. All Rights Reserved. Portions of this site
            originally © Joyent.
          </p>
        </div>
        <div className="mr">
          <p>
            Node.js is a trademark of the OpenJS Foundation. Please review the
            <span className="x"> Trademark List </span>and{" "}
            <span className="x">
              {" "}
              Trademark
              <br /> Guidelines
            </span>{" "}
            of the <span className="x"> OpenJS Foundation</span>.
          </p>
        </div>
        <br />
        <br />
        <div className="lw">
          <p>
            {" "}
            <span className="x"> Node.js Project Licensing Information.</span>
          </p>
        </div>
      </div>
      <div className="right">
        <ul>
          <li>
            <div className="x"> Get Help</div>
          </li>
          <li>
            <div className="x"> Edit on github</div>
          </li>
          <li>
            <div className="x"> Report Node.js issue</div>
          </li>
          <li>
            <div className="x"> Report website issue</div>
          </li>

          <li>
            <div className="x"> Contributing For Nodejs.org</div>
          </li>
        </ul>
      </div>
    </div>
  );
};

export default Footer;
