const ex1 = () => {
  function shoot() {
    alert("Great Shot!");
  }
  const myelement = (
    <div>
      <hr />
      <button onClick={shoot}>Shoot Me</button>
      <hr />
    </div>
  );
  return myelement;
};

export default ex1;
