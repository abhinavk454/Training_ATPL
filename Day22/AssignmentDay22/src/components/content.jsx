import "../styles/content.css";
import {
  AiFillFacebook,
  AiFillLinkedin,
  AiOutlineGithub,
  AiFillTwitterSquare,
} from "react-icons/ai";

const content = () => {
  return (
    <div className="content">
      <div className="left"></div>
      <div className="right">
        <div className="texts">
          <h5>
            We work with professionals as well as with people who came to the
            recording studio.
          </h5>
          <h2>Simple HTML website template</h2>
        </div>
        <div className="tex">
          <h3>Give your listeners a professional record of your work!</h3>
          <br />
          <div className="ot">
            <p> - Professionally we will write a song;</p>
            <p>
              {" "}
              - We will help to make an advertising audio-movie or jingles;
            </p>
            <p> - We will voice the video;</p>
            <p> - We will arrange for author's song;</p>
            <p> - We will write congratulations to any events;</p>
            <p> - Sound recording of children;</p>
          </div>
        </div>
        <div className="icons">
          <div className="yt">
            <AiFillTwitterSquare />
          </div>
          <div className="go">
            <AiOutlineGithub />
          </div>
          <div className="lin">
            <AiFillLinkedin />
          </div>
          <div className="fb">
            <AiFillFacebook />
          </div>
        </div>
      </div>
    </div>
  );
};

export default content;
