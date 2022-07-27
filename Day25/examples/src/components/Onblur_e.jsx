import React from "react";

export default class onblur_e extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      username: "",
      password: "",
      messageUsername: "",
      messagePassword: "",
    };
  }
  handleOnBlurUsername(event) {
    var username = event.target.value;
    var messageUsername = "";
    if (!username) {
      messageUsername = "Username required";
    }
    this.setState({
      username: username,
      messageUsername: messageUsername,
    });
  }
  render() {
    return (
      <div>
        <h2>onBlur event example</h2>
        <label>Username:</label>
        <input type="text" onBlur={this.handleOnBlurUsername.bind(this)} />
        {this.state.messageUsername}
        <br />
        <label>Password:</label>
        <input type="password" />
        {this.state.messagePassword}
        <br />
        <br />
        <button>Login</button>
        <hr />
      </div>
    );
  }
}
