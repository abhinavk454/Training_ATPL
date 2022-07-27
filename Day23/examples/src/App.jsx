import "./App.css";
import Example1 from "./components/ex1";
import Example2 from "./components/ex2";
import Example3 from "./components/ex3";
import Example4 from "./components/ex4";
import Example5 from "./components/ex5";

function App() {
  return (
    <div className="App">
      <Example1 />
      <Example2 />
      <Example3 name={"Helen"} />
      <Example4 />
      <Example5 />
    </div>
  );
}

export default App;
