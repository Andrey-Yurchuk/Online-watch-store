async function loginAdmin(url) { 
    
    let request = {
        login : document.getElementById("login").value,
        password : document.getElementById("password").value
      };
    
    let response = await fetch(url, {
        method: 'POST',
        headers: {
        'Content-Type': 'application/json; charset=utf-8'
        },
        body: JSON.stringify(request)
    });
    
    let json = await response.json();
    if (json.url) {
        window.location.href = '/' + json.url;
    } else {
        alert(json.status + ' - ' + json.message);
    }    
};