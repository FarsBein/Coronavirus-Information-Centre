//Javascript script that calls a Covid-19 API that provides information regarding Covid cases
fetch('https://covid-api.mmediagroup.fr/v1/cases')
.then(res => res.json())
.then(data => loopData(data));

//A looping funtion that populates the table in our index page.
const loopData = (data) => {
    console.log("data:",data)
    console.log("recovered:",data['Afghanistan']["All"]["recovered"])
    console.log("confirmed:",data['Afghanistan']["All"]["confirmed"])
    console.log("deaths:",data['Afghanistan']["All"]["deaths"])
    html=""
    //Build the HTML code for the table in our index page. Recursively runs through the data fetched from the API.
    for (const country in data) {
        html+='<tr><td scope="col">'+ country +'</td>'+
        '<td scope="col">'+ data[country]["All"]["recovered"] +'</td>'+
        '<td scope="col">'+ data[country]["All"]["confirmed"] +'</td>'+
        '<td scope="col">'+ data[country]["All"]["deaths"] +'</td><tr>'
    }
    const tableBody = document.querySelector('.body');
    tableBody.innerHTML = html
}


