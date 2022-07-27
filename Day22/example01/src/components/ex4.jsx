import "../styles/ex4.css";

const example4 = () => {
  const mystyle = {
    color: "Green",
    backgroundColor: "lightBlue",
    padding: "10px",
    fontFamily: "Arial",
  };
  return (
    <div className="hello">
      <h1 style={mystyle}>Hello ATPL Candidates</h1>
      <p>Here, you can find all CS tutorials.</p>
      <hr />
    </div>
  );
};

export default example4;
