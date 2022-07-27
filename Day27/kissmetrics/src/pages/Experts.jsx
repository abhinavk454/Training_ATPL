import Lower from "../components/Lower";
import Nav from "../components/Nav";
import UpperContent from "../components/UpCon";

const Experts = () => {
  return (
    <div className="te">
      <div className="main">
        <Nav />
        <UpperContent />
      </div>
      <h2 className="it">Experts</h2>
      <Lower name_c="Experts" />
    </div>
  );
};

export default Experts;
