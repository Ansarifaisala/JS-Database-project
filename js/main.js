window.addEventListener("load", function (event) {


    let ulList = document.getElementById("ulList");
    /** 
    *this fuction formats html page AND displays items list
    *@param {itemlist} list of items
    */
    function success(itemlist) {
        for (let i = 0; i < itemlist.length; i++) {
            ulList.innerHTML += "<li>" + itemlist[i].item + "(" + itemlist[i].quantity + ")</li>"
        }
    }
    /**
     * this function is called whenever the form is submiited 
     * new value is inserted in database and item list is fetched from database
     */
    document.forms.mainform.addEventListener("submit", function (event) {
        event.preventDefault();

        let item = document.getElementById("item").value;
        let quantity = document.getElementById("quantity").value;

        //insert new data
        let url = "AddItem.php?item=" + item + "&quantity=" + quantity;
        fetch(url, { credentials: 'include' });

        // do the fetch
        url = "GetList.php";
        fetch(url, { credentials: 'include' })
            .then(response => response.json())
            .then(success)

    }
    );

});