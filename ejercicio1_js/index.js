const API_URL="https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items";

const xhl = new XMLHttpRequest();

    function onRequestHandler(){

        if(this.readyState==4 &&this.status==200){
            
            const data = JSON.parse(this.response);
            
            console.log(data);

            const HTMLResponse =document.querySelector('#app');

              var array = data
              
              var array2
                
                array.forEach(function(data, index) {
                    if(data.color =="red"){
                        array2= `<tr>
                            <td>${data.id}</td>
                            <td>${data.type}</td>
                            <td>${data.color}</td>
                        </tr>`
                    }
                });

            HTMLResponse.innerHTML=array2
        }
    }

    xhl.addEventListener('load',onRequestHandler);
    xhl.open('GET',API_URL); //Tomar la informacion de la API

    xhl.send();