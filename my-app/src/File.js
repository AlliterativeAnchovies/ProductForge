import React, { Component } from "react";
import "./App.css";


class File extends Component {


	render() {
		return (
	  		<div className="File">
				<form action="/TestFormSubmit" method="post">
			  	First name:<br/>
			  	<input type="text" name="firstname" value="Mickey"/>
			  	<br/>
			  	Last name:<br/>
			  	<input type="text" name="lastname" value="Mouse"/>
			  	<br/><br/>
			  	<input type="submit" value="Submit"/>	
			</form> 
		  </div>
		);
	}
	
}


export default File;
