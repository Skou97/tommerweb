let searchTimeout

document.getElementById("search-dawa-adr").onkeyup = () => {
    clearTimeout(searchTimeout),
    searchTimeout=setTimeout(
        callDawaAutocomplet(document.getElementById("search-dawa-adr").value),
        250
    )
}

const callDawaAutocomplet = string => {
    fetch(`https://dawa.aws.dk/autocomplete?q=${string}`)
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        document.getElementById('search-dawa-adr-list').innerHTML = ''
        data.slice(0, 6).map(element => {
            const address = document.createElement('li')
            const addressName = document.createTextNode(element.forslagstekst)
            address.appendChild(addressName)
            address.addEventListener('click', () => {
                document.getElementById("search-dawa-adr").value = element.forslagstekst
                document.getElementById('search-dawa-adr-list').innerHTML = ''
            })
            document.getElementById('search-dawa-adr-list').appendChild(address)
        })
    })
}