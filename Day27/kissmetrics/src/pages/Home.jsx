import Lower from "../components/Lower";
import Nav from "../components/Nav";
import UpperContent from "../components/UpCon";

const Home = () => {
  return (
    <div className="te">
      <div className="main">
        <Nav />
        <UpperContent />
      </div>
      <h2 className="it">All</h2>
      <Lower />
    </div>
  );
};

export default Home;
