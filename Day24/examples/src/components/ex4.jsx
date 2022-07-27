import React from "react";

export default class ex3 extends React.Component {
  constructor(props) {
    super(props);
    this.state = { num1: "", num2: "", total: "" };
  }
  sum() {
    this.setState({
      total: parseInt(this.state.num1) + parseInt(this.state.num2),
    });
  }
  render() {
    return (
      <div>
        <h1>Add Two Number</h1>
        <input
          type="text"
          className="inputStyle"
          value={this.state.num1}
          onChange={(e) => {
            this.setState({ num1: e.target.value });
          }}
        />
        <br />
        <br />
        <input
          type="text"
          className="inputStyle"
          value={this.state.num2}
          onChange={(e) => {
            this.setState({ num2: e.target.value });
          }}
        />
        <br />
        <br />
        <button
          onClick={() => {
            this.sum();
          }}
        >
          Add Numbers
        </button>
        <br />
        <br />
        <input type="text" value={this.state.total} />
        <hr />
      </div>
    );
  }
}
