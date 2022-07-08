import React from "react";

export default class ex3 extends React.Component {
  shoot = (x) => {
    alert(x);
    console.log(x);
  };
  render() {
    return (
      <div>
        <button
          onClick={() => {
            this.shoot("Goal");
          }}
        >
          Take the shoot😀😀
        </button>
        <hr />
      </div>
    );
  }
}
