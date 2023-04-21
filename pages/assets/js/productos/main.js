document.addEventListener('DOMContentLoaded', function () {
    const inputSearch = document.querySelector("#inputSearch");
    inputSearch.addEventListener("keyup",function(e){
        if (this.value.length >= 3 || this.value.length == 0) {
            const search = this.value != "" ? this.value : "no-data";
            axios.get(`${url_app}productos/search/${search}`)
            .then(function (response) {
                document.querySelector("#search_response").innerHTML = response.data;
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    });
}, false);
