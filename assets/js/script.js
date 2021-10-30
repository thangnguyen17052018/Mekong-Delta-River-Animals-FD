function fetch_data(page){
    $.ajax({
        url: "./php/pagination.php",
        method: "POST",
        data:{
            page: page
        },
        success: function(data){
            $(".gallery").html(data);
        }
    });
}
fetch_data(2);

const ul = document.querySelector(".pagination ul");

let totalPages = Math.ceil(document.querySelector('#totalPage').value/3);
console.log(totalPages);
function element(totalPages, page){
    let li = '';
    let beforePages = page - 1;
    let afterPages = page + 1;
    let activeLi;
    if (page > 1){
        li +=  `<li class="btn prev" onclick="element(totalPages, ${page - 1})"><span><i class="fas fa-angle-left"></i> Prev</span></li>`;
    }

    if (page > 2){
        li += `<li class="numb" onclick="element(totalPages, 1)"><span>1</span></li>`;
        if (page > 3){
            li += `<li class="dots"><span>...</span></li>`;
        }
    }

    //bao nhieu li hien thi truoc li hien tai
    if (page == totalPages){
        beforePages = beforePages - 2;
    } else if (page == totalPages - 1){
        beforePages = beforePages - 1;
    }

    //bao nhieu li hien thi sau li hien tai
    if (page == 1){
        afterPages = afterPages + 2;
    } else if (page == 2){
        afterPages = afterPages + 1;
    }

    for (let pageLength = beforePages; pageLength <= afterPages; pageLength++){
        if (pageLength > totalPages)
            continue;
        if (pageLength == 0)
            pageLength += 1;
        if (page == pageLength){
            activeLi = "active";
        } else {
            activeLi = "";
        }
        li+= `<li class="numb ${activeLi}" onclick="element(totalPages, ${pageLength})"><span>${pageLength}</span></li>`;
    }

    if (page < totalPages - 1){
        if (page < totalPages - 2){
            li += `<li class="dots"><span>...</span></li>`;
        }
        li += `<li class="numb" onclick="element(totalPages, ${totalPages})"><span>${totalPages}</span></li>`;
    }

    if (page < totalPages){
        li += `<li class="btn next" onclick="element(totalPages, ${page + 1})"><span>Next <i class="fas fa-angle-right"></i></span></li>`;
    }
    ul.innerHTML = li;
    fetch_data(page);
}
element(totalPages, 1); 



let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}


let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}