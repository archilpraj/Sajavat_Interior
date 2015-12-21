function cartpdate(a)
{
    var id = a.value;
    var tb = a.name;
    //alert(id+tb);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "cart.php?product_id=" + id + "&tb=" + tb);
    xmlhttp.send();
    swal({
        title: "Cart",
        text: "Item Added to cart",
        type: "success",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Continue",
        closeOnConfirm: true
    },
    function ()
    {
        window.location.reload(true);
    }
    );
}
function dispsofa()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "logic.php?val=ransofa");
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var ransofa = xmlhttp.responseText;
            document.getElementById("pdata1").innerHTML += ransofa;
        }
    }
    xmlhttp.send();
}
function disptv()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "logic.php?val=rantv", true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var rantv = xmlhttp.responseText;
            var b = document.getElementById("pdata1").innerHTML;
            document.getElementById("pdata1").innerHTML += rantv;
        }
    }
}
function dispran()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "logic.php?val=ranb", true);
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var randata = xmlhttp.responseText;
            //alert(randata);
            document.getElementById("pdata1").innerHTML = randata;
        }
    }
    xmlhttp.send();
    disptv();
    dispsofa();
}
function disppro(a)
{
    if (a == "p_beds")
    {
        document.getElementById("p_title").innerHTML = "Beds Collection";
    }
    else if (a == "p_bstables")
    {
        document.getElementById("p_title").innerHTML = "Bed Side Tables Collection";
    }
    else if (a == "p_dtables")
    {
        document.getElementById("p_title").innerHTML = "Dining Tables Collection";
    }
    else if (a == "p_tvsets")
    {
        document.getElementById("p_title").innerHTML = "TV Sets Collection";
    }
    else if (a == "p_sofas")
    {
        document.getElementById("p_title").innerHTML = "Sofas Collection";
    }
    else if (a == "p_dressers")
    {
        document.getElementById("p_title").innerHTML = "Dressers Collection";
    }
    else if (a == "p_badunits")
    {
        document.getElementById("p_title").innerHTML = "BookShelf and Display Units Collection";
    }
    else if (a == "p_tables")
    {
        document.getElementById("p_title").innerHTML = "Tables Collection";
    }

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "logic.php?val=" + a, true);
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var pdata = xmlhttp.responseText;

            document.getElementById("pdata1").innerHTML = pdata;
        }
    }
    xmlhttp.send();
}