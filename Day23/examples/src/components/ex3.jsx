import React from "react";

export default class example3 extends React.Component {
  render() {
    return (
      <div>
        <h2>Welcome {this.props.name}</h2>
        <p>This ia great place to learn React.</p>
        <hr />
      </div>
    );
  }
}
