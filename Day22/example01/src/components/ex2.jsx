const example2 = () => {
  var x = 5,
    y = 2,
    z = 1;
  return (
    <div>
      <h2>X = {x}</h2>
      <h2>Y = {y}</h2>
      <h2>Z = {z}</h2>
      <h3>Greatest of all these = {x > (y > z ? z : y) ? x : y > z ? y : z}</h3>
      <hr />
    </div>
  );
};

export default example2;
