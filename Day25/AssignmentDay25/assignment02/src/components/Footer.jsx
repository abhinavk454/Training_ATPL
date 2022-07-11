import {
  AiFillFacebook,
  AiFillInstagram,
  AiFillTwitterSquare,
  AiOutlineYoutube,
} from "react-icons/ai";
import { SiGmail } from "react-icons/si";
const Footer = () => {
  return (
    <div className="footer">
      <div className="foot1">
        <div className="icn">
          <AiFillFacebook size={50} />
          <AiFillInstagram size={50} />
          <SiGmail size={50} />
          <AiFillTwitterSquare size={50} />
          <AiOutlineYoutube size={50} />
        </div>
        <div className="oth">ALPHA | BETA | GAMMA | DELTA | THETA | OMEGA</div>
      </div>
      <div className="foot_nav">
        <h3>WE ARE HERE TO HELP YOU WITH YOUR BUSINESS EMAIL</h3>
        <p>Copyright belongs to IIHT@2022</p>
      </div>
    </div>
  );
};

export default Footer;
