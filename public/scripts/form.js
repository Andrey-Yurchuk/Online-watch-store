async function submitForm(url) { 
    
    let request = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        text : document.getElementById("text").value
      };
    
    let response = await fetch(url, {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json; charset=utf-8'
        },
        body: JSON.stringify(request)
    });
    
    let result = await response.json();
    alert(result.message);
};







/*formElem.onsubmit = async (e) => {
    e.preventDefault();

    let response = await fetch('/contact', {
      method: 'POST',
      body: new FormData(formElem)
    });

    let result = await response.json();
    alert(result.message);
};*/
