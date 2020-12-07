//Javascript script that calls a Covid-19 API that provides information regarding Covid cases
fetch('https://api.covidnow.com/v1/global/countries')
.then(res => res.json())
.then(data => loopData(data["countries"]));

//Function to return information fromt the API. If there is no information then it will return 0.
const isThereValue = (data,i,key) => {
    if (data[i][key]) {
        return data[i][key]
    } else {
        return 0
    }
}

//A looping funtion that populates the table in our index page.
const loopData = (data) => {
    console.log(data)
    html=""
    //Build the HTML code for the table in our index page. Recursively runs through the data fetched from the API.
    for (i = 0; i < data.length; i++) {
        html+='<tr><td scope="col">'+ isThereValue(data,i,"country")+'</td>'+
        '<td scope="col">'+ isThereValue(data,i,"recovered") +'</td>'+
        '<td scope="col">'+ isThereValue(data,i,"confirmed") +'</td>'+
        '<td scope="col">'+ isThereValue(data,i,"deaths") +'</td><tr>'
    }
    const tableBody = document.querySelector('.body');
    tableBody.innerHTML = html
}


