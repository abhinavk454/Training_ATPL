import React from "react";

export default class ex2 extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      companyName: "",
    };
  }

  changeText(e) {
    this.setState({
      companyName: e.target.value,
    });
  }

  render() {
    return (
      <div>
        <h2>Simple Event Example</h2>
        <label htmlFor="name">Enter Your company name: </label>
        <input
          type="text"
          id="companyName"
          onChange={this.changeText.bind(this)}
        />
        <h4>You entered: {this.state.companyName}</h4>
        <hr />
      </div>
    );
  }
}
