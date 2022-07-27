import "./App.css";
import Heading from "./components/header";
import Foots from "./components/footer";
import Content from "./components/content";

function App() {
  return (
    <div className="App">
      <Heading />
      <Content />
      <Foots />
    </div>
  );
}

export default App;
