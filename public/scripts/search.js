async function searchForm(url) { 
    
    let response = await fetch(url, {
        method: 'POST',
        body: new FormData(seForm)
    });
    
    let result = await response.json();
    alert(result.message);
};