//https://stackoverflow.com/questions/22783108/convert-js-object-to-form-data
function getFormData(object) {
	const formData = new FormData();
	Object.keys(object).forEach(key => formData.append(key, object[key]));
	return formData;
}

var allTables = document.getElementsByClassName("tableDisplayFromSQL");//this is the inside of tbody
/*Array.prototype.forEach.call(allTables, function(aT) {
    // Debug
    console.log(aT.tagName);
    // Now do stuff
    aT.innerHTML = `
     			<tr>
                  <td>Lala Nixon</td>
                  <td>£100</td>
                  <td>Edinburgh</td>
                  <td>this will be the bio of the person</td>
                  <td>Studio</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>£200</td>
                  <td>Glasgow</td>
                  <td>this will be the bio of the person</td>
                  <td>One bedroom</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>£150</td>
                  <td>aberdeen</td>
                  <td>this will be the bio of the person</td>
                  <td>Two bedroom</td>
                  <td>No</td>
                </tr>
                `
});*/
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		//document.getElementById("demo").innerHTML = this.responseText;
		//console.log("---------------");
		//console.log(this.responseText);
		//console.log("---------------");
		eval(this.responseText);
		dataToFillWith = "";
		for (var i = 0;i<firstname.length;i++) {
			dataToFillWith += "<tr>";
				dataToFillWith += "<td>" + firstname[i]+" "+lastname[i] + "</td>";
				dataToFillWith += "<td>" + price[i] + "</td>";
				dataToFillWith += "<td>" + location[i] + "</td>";
				dataToFillWith += "<td>" + description[i] + "</td>";
				dataToFillWith += "<td>" + accomodation_type[i] + "</td>";
				dataToFillWith += "<td>" + first_time_renter[i] + "</td>";
			dataToFillWith += "</tr>";
		}
		Array.prototype.forEach.call(allTables, function(aT) {
    		aT.innerHTML = dataToFillWith;
    	});
	}
};
xhttp.open("POST", "js/sqlquery.php", true);
//xhttp.open("GET","js/sqlquery.php", true);
var toSend = {};
toSend["Query"] = "SELECT * FROM Tenants;";
//xhttp.send();
xhttp.send(getFormData(toSend));