fetch('https://api.covidnow.com/v1/global/countries')
.then(res => res.json())
.then(data => loopData(data["countries"]));

const isThereValue = (data,i,key) => {
    if (data[i][key]) {
        return data[i][key]
    } else {
        return 0
    }
}

const loopData = (data) => {
    console.log(data)
    html=""
    for (i = 0; i < data.length; i++) {
        html+='<tr><td scope="col">'+ isThereValue(data,i,"country")+'</td>'+
        '<td scope="col">'+ isThereValue(data,i,"recovered") +'</td>'+
        '<td scope="col">'+ isThereValue(data,i,"confirmed") +'</td>'+
        '<td scope="col">'+ isThereValue(data,i,"deaths") +'</td><tr>'
    }
    const tableBody = document.querySelector('.body');
    tableBody.innerHTML = html
}

// document.body.innerHTML = 
// `
// <tr>
//     <th scope="col">Countries</th>
//     <th scope="col">Recovered</th>
//     <th scope="col">Confirmed</th>
//     <th scope="col">Deaths</th>
// </tr>
// `

