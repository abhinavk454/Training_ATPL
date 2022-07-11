import React from "react";

export default class onclick_e extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      cname: "",
    };
  }
  handle_onChange(event) {
    this.setState({
      cname: event.target.value,
    });
  }
  render() {
    return (
      <div>
        <h2>onChange event example</h2>
        <label htmlFor="cname">
          Name:
          <input
            type="text"
            id="cname"
            name="cname"
            placeholder="Enter Company Name"
            onChange={this.handle_onChange.bind(this)}
          />
        </label>
        <h4>You entered : {this.state.cname}</h4>
        <hr />
      </div>
    );
  }
}
